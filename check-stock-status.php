<?php

require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

echo "=== Stock Status Check ===\n\n";
echo "Products: " . App\Models\Product::count() . "\n";
echo "ProductSizes: " . App\Models\ProductSize::count() . "\n";
echo "Total Stock: " . App\Models\ProductSize::sum('quantity') . "\n\n";

echo "=== Products with Stock ===\n";
$products = App\Models\Product::with('productsizes')->take(10)->get();
foreach ($products as $product) {
    $totalStock = $product->productsizes->sum('quantity');
    echo "Product ID: {$product->id} - {$product->name} - Total Stock: {$totalStock}\n";
    foreach ($product->productsizes as $ps) {
        echo "   Size ID: {$ps->size_id} - Qty: {$ps->quantity}\n";
    }
}
