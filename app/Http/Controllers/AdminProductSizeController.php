<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductSize;
use App\Models\Size;
use Illuminate\Http\Request;

class AdminProductSizeController extends Controller
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

    public function create(Product $product)
    {
        $sizesWithoutSizeInProduct = Size::whereNotIn('id', function ($query) use ($product) {
            $query->select('size_id')->from('product_sizes')->where('product_id', $product->id);
        })->latest()->get();

        return view("dashboard.productsizes.create", [
            'product' => $product,
            'sizes' => $sizesWithoutSizeInProduct,
            'colors' => $this->getAvailableColors(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'size' => ["required"],
            'quantity' => ["required", "integer", "min:0"],
            'color' => ["nullable", "string"],
            'color_code' => ["nullable", "string"],
        ]);

        ProductSize::create([
            'product_id' => $request->product_id,
            'size_id' => $request->size,
            'quantity' => $request->quantity,
            'color' => $request->color,
            'color_code' => $request->color_code,
        ]);

        return redirect()->route('dashboard.products.index')->with('success', 'Product Size added successfully!');
    }

    public function edit(ProductSize $productsize)
    {
        $sizesWithoutSizeInProduct = Size::whereNotIn('id', function ($query) use ($productsize) {
            $query->select('size_id')->from('product_sizes')->where('product_id', $productsize->product_id);
        })->latest()->get();

        return view("dashboard.productsizes.edit", [
            'productsize' => $productsize,
            'sizes' => $sizesWithoutSizeInProduct,
            'colors' => $this->getAvailableColors(),
        ]);
    }

    public function update(Request $request, ProductSize $productsize)
    {
        $request->validate([
            'size' => ["required"],
            'quantity' => ["required", "integer", "min:0"],
            'color' => ["nullable", "string"],
            'color_code' => ["nullable", "string"],
        ]);

        $productsize->update([
            'size_id' => $request->size,
            'quantity' => $request->quantity,
            'color' => $request->color,
            'color_code' => $request->color_code,
        ]);

        return redirect()->route('dashboard.products.index')->with('success', 'Product Size updated successfully!');
    }

    public function destroy(ProductSize $productsize)
    {
        $productsize->delete();

        return redirect()->route('dashboard.products.index')->with('success', 'Product Size removed successfully!');
    }
}
