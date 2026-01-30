<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('products')->get();
        
        return view('categories.index', [
            'categories' => $categories
        ]);
    }

    public function show(Category $category)
    {
        $products = Product::where('category_id', $category->id)
            ->with('category', 'productsizes.size', 'subcategory')
            ->latest()
            ->paginate(12);
            
        return view('categories.show', [
            'category' => $category,
            'products' => $products
        ]);
    }
}