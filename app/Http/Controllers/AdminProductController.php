<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Size;
use App\Models\Product;
use App\Models\ProductSize;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class AdminProductController extends Controller
{
    // Available colors for selection
    private function getAvailableColors()
    {
        return [
            ['name' => 'ڕەش', 'code' => '#000000'],
            ['name' => 'سپی', 'code' => '#FFFFFF'],
            ['name' => 'شین', 'code' => '#3B82F6'],
            ['name' => 'سوور', 'code' => '#EF4444'],
            ['name' => 'سەوز', 'code' => '#22C55E'],
            ['name' => 'زەرد', 'code' => '#EAB308'],
            ['name' => 'پەمەیی', 'code' => '#EC4899'],
            ['name' => 'مۆر', 'code' => '#A855F7'],
            ['name' => 'قاوەیی', 'code' => '#A16207'],
            ['name' => 'خۆڵەمێشی', 'code' => '#6B7280'],
            ['name' => 'نەیلی', 'code' => '#1E3A5F'],
            ['name' => 'بێژ', 'code' => '#D4A574'],
            ['name' => 'نارنجی', 'code' => '#F97316'],
            ['name' => 'فیرۆزەیی', 'code' => '#06B6D4'],
        ];
    }

    public function index()
    {
        return view("dashboard.products.index", [
            'products' => Product::with("category", "subcategory", "productsizes")->latest()->get(),
        ]);
    }

    public function create()
    {
        $categories = Category::latest()->get();
        $subcategories = SubCategory::latest()->get();
        $sizes = Size::latest()->get();

        return view("dashboard.products.create", [
            'categories' => $categories,
            'subcategories' => $subcategories,
            'sizes' => $sizes,
            'colors' => $this->getAvailableColors(),
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request,
            [
                'name' => ["required", "min:2", "max:255"],
                'description' => ["required", "min:2"],
                'image' => ["required", "image"],
                'category' => ["required"],
                'sizes' => ["required", "array"],
                'quantities' => ["required", "array"],
                'price' => ["required", "integer"],
                'discount_percentage' => ["nullable", "numeric", "min:0", "max:100"],
                'discount_ends_at' => ["nullable", "date"],
                'stock_alert' => ["nullable", "integer", "min:0"],
            ],
        );

        // Upload Image to products directory and return the path if it's successful
        $path = $this->uploadImage();

        $subcategory_id = $request->category;
        $category_id = SubCategory::where("id", $subcategory_id)->first()->category_id;

        $product = Product::create([
            "category_id" => $category_id,
            "subcategory_id" => $subcategory_id,
            "name" => $request->name,
            "description" => $request->description,
            "price" => $request->price,
            "image" => $path,
            "discount_percentage" => $request->discount_percentage,
            "discount_ends_at" => $request->discount_ends_at,
            "is_featured" => $request->has('is_featured'),
            "is_new" => $request->has('is_new'),
            "is_trending" => $request->has('is_trending'),
            "stock_alert" => $request->stock_alert ?? 5,
        ]);

        // Create Product Size For Each Product
        $this->createProductSizeForEachProduct($product);

        return redirect()->route('dashboard.products.index')->with('success', 'Product added successfully!');
    }

    public function createProductSizeForEachProduct(Product $product)
    {
        $sizes = request()->sizes;
        $quantities = request()->quantities;
        $productColors = request()->product_colors ?? [];

        // If colors are selected, create entries for each size-color combination
        if (!empty($productColors)) {
            foreach ($sizes as $size => $sizeId) {
                foreach ($productColors as $colorData) {
                    $colorName = null;
                    $colorCode = null;
                    
                    if ($colorData && strpos($colorData, '|') !== false) {
                        list($colorName, $colorCode) = explode('|', $colorData);
                    }

                    // Calculate quantity per color (divide evenly)
                    $totalQuantity = $quantities[$size] ?? 0;
                    $quantityPerColor = floor($totalQuantity / count($productColors));

                    ProductSize::create([
                        "product_id" => $product->id,
                        "size_id" => $sizeId,
                        "quantity" => $quantityPerColor,
                        "color" => $colorName,
                        "color_code" => $colorCode,
                    ]);
                }
            }
        } else {
            // No colors selected, create entries without color
            foreach ($sizes as $size => $sizeId) {
                ProductSize::create([
                    "product_id" => $product->id,
                    "size_id" => $sizeId,
                    "quantity" => $quantities[$size] ?? 0,
                    "color" => null,
                    "color_code" => null,
                ]);
            }
        }
    }

    public function uploadImage()
    {
        if (!request()->hasFile('image')) {
            return null;
        }

        $path = request()->file('image')->store('products', "public");

        if (!$path) {
            throw ValidationException::withMessages(["error", "Unable to store the image. Please try again later"]);
        }

        return $path;
    }

    public function edit(Product $product)
    {
        $productsizes = ProductSize::with(["product", "size"])->where("product_id", $product->id)->latest()->get();
        $categories = Category::latest()->get();
        $subcategories = SubCategory::latest()->get();

        return view("dashboard.products.edit", [
            'product' => $product,
            'productsizes' => $productsizes,
            'categories' => $categories,
            'subcategories' => $subcategories,
        ]);
    }

    public function update(Request $request, Product $product)
    {
        $request->validate(
            [
                'name' => ["required", "min:2", "max:255"],
                'description' => ["required", "min:2"],
                'image' => ["image"],
                'category' => ["required"],
                'price' => ["required", "integer"],
                'discount_percentage' => ["nullable", "numeric", "min:0", "max:100"],
                'discount_ends_at' => ["nullable", "date"],
                'stock_alert' => ["nullable", "integer", "min:0"],
            ],
        );

        // If there's a new image delete old one if not just upload the old one

        $oldImagePath = $product->image;

        $newImagePath = $this->uploadImage();

        $path = $newImagePath ?? $oldImagePath;

        if ($oldImagePath && $newImagePath) {
            Storage::disk('public')->delete($oldImagePath);
        }

        $subcategory_id = $request->category;
        $category_id = SubCategory::where("id", $subcategory_id)->first()->category_id;

        $product->update([
            "category_id" => $category_id,
            "subcategory_id" => $subcategory_id,
            "name" => $request->name,
            "description" => $request->description,
            "price" => $request->price,
            "image" => $path,
            "discount_percentage" => $request->discount_percentage,
            "discount_ends_at" => $request->discount_ends_at,
            "is_featured" => $request->has('is_featured'),
            "is_new" => $request->has('is_new'),
            "is_trending" => $request->has('is_trending'),
            "stock_alert" => $request->stock_alert ?? $product->stock_alert,
        ]);

        return redirect()->route('dashboard.products.index')->with('success', 'Product updated successfully!');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('dashboard.products.index')->with('success', 'Product removed successfully!');
    }
}
