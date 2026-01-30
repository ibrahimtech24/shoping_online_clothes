<?php

require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

echo "=== Checking Product Colors ===\n\n";

// Get a product with productsizes
$product = App\Models\Product::with('productsizes')->first();
echo "Product: {$product->id} - {$product->name}\n\n";

echo "All ProductSizes:\n";
foreach ($product->productsizes as $ps) {
    $colorDisplay = $ps->color ? $ps->color : '(empty)';
    $colorCodeDisplay = $ps->color_code ? $ps->color_code : '(empty)';
    echo "  Size: {$ps->size_id} | Color: [{$colorDisplay}] | Code: [{$colorCodeDisplay}] | Qty: {$ps->quantity}\n";
}

// Check the filter
$availableColors = $product->productsizes->whereNotNull('color')->where('quantity', '>', 0)->unique('color_code');
echo "\n\nFiltered Colors (whereNotNull('color') AND quantity > 0):\n";
echo "Count: " . $availableColors->count() . "\n";
foreach ($availableColors as $c) {
    echo "  Color: [{$c->color}] | Code: [{$c->color_code}]\n";
}

// Also check with empty string filter
$availableColors2 = $product->productsizes->where('color', '!=', '')->where('color', '!=', null)->where('quantity', '>', 0)->unique('color_code');
echo "\n\nFiltered Colors (color != '' AND color != null):\n";
echo "Count: " . $availableColors2->count() . "\n";
foreach ($availableColors2 as $c) {
    echo "  Color: [{$c->color}] | Code: [{$c->color_code}]\n";
}

// Check how many products have empty colors
echo "\n\n=== Products with empty color names ===\n";
$emptyColorCount = App\Models\ProductSize::where(function($q) {
    $q->whereNull('color')->orWhere('color', '');
})->count();
$totalCount = App\Models\ProductSize::count();
echo "ProductSizes with empty color: {$emptyColorCount} / {$totalCount}\n";
