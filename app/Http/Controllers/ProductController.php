<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::with('category', 'productsizes.size', 'subcategory');

        // Search functionality
        if ($request->has('search') && !empty($request->search)) {
            $searchTerm = $request->search;
            $query->where(function($q) use ($searchTerm) {
                $q->where('name', 'LIKE', "%{$searchTerm}%")
                  ->orWhere('description', 'LIKE', "%{$searchTerm}%")
                  ->orWhereHas('category', function($catQuery) use ($searchTerm) {
                      $catQuery->where('name', 'LIKE', "%{$searchTerm}%");
                  })
                  ->orWhereHas('subcategory', function($subQuery) use ($searchTerm) {
                      $subQuery->where('name', 'LIKE', "%{$searchTerm}%");
                  });
            });
        }

        // Filter by category
        if ($request->has('category') && !empty($request->category)) {
            $query->where('category_id', $request->category);
        }

        // Filter by subcategories
        if ($request->has('subcategories') && !empty($request->subcategories)) {
            $query->whereIn('subcategory_id', $request->subcategories);
        }

        // Filter by price range
        if ($request->has('min_price') && !empty($request->min_price)) {
            $query->where('price', '>=', $request->min_price);
        }

        if ($request->has('max_price') && !empty($request->max_price)) {
            $query->where('price', '<=', $request->max_price);
        }

        // Filter by product status
        if ($request->has('status') && !empty($request->status)) {
            foreach ($request->status as $status) {
                switch ($status) {
                    case 'featured':
                        $query->where('is_featured', true);
                        break;
                    case 'new':
                        $query->where('is_new', true);
                        break;
                    case 'trending':
                        $query->where('is_trending', true);
                        break;
                    case 'discount':
                        $query->where('discount_percentage', '>', 0)
                              ->where(function($q) {
                                  $q->whereNull('discount_ends_at')
                                    ->orWhere('discount_ends_at', '>', now());
                              });
                        break;
                }
            }
        }

        // Filter by availability
        if ($request->has('availability') && $request->availability !== 'all') {
            switch ($request->availability) {
                case 'in_stock':
                    $query->whereHas('productsizes', function($q) {
                        $q->where('quantity', '>', 0);
                    });
                    break;
                case 'low_stock':
                    $query->whereHas('productsizes', function($q) {
                        $q->havingRaw('SUM(quantity) <= stock_alert AND SUM(quantity) > 0');
                    });
                    break;
            }
        }

        // Sorting
        $sortBy = $request->get('sort', 'latest');
        switch ($sortBy) {
            case 'latest':
                $query->latest();
                break;
            case 'oldest':
                $query->oldest();
                break;
            case 'price_low':
                $query->orderBy('price', 'asc');
                break;
            case 'price_high':
                $query->orderBy('price', 'desc');
                break;
            case 'name_asc':
                $query->orderBy('name', 'asc');
                break;
            case 'name_desc':
                $query->orderBy('name', 'desc');
                break;
            case 'discount':
                $query->orderBy('discount_percentage', 'desc');
                break;
            default:
                $query->latest();
                break;
        }

        // Pagination
        $perPage = $request->get('per_page', 12);
        $products = $query->paginate($perPage)->withQueryString();

        $categories = Category::all();
        $subcategories = SubCategory::withCount('products')->get();

        return view('products.index', [
            'products' => $products,
            'categories' => $categories,
            'subcategories' => $subcategories,
        ]);
    }

    public function show(Product $product)
    {
        // Load relationships for product details
        $product->load(['category', 'subcategory', 'productsizes.size']);
        
        // Get related products from same category
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->take(4)
            ->get();

        return view('products.show', [
            'product' => $product,
            'relatedProducts' => $relatedProducts
        ]);
    }
}
