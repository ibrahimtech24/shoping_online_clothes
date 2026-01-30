<?php

require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

echo "=== Testing ProductSize Query ===\n\n";

// Test with a specific product
$product = App\Models\Product::first();
echo "Product ID: {$product->id} - {$product->name}\n\n";

echo "All ProductSizes for this product:\n";
$productSizes = App\Models\ProductSize::where('product_id', $product->id)->get();
foreach ($productSizes as $ps) {
    echo "  ID: {$ps->id} | Size ID: {$ps->size_id} | Qty: {$ps->quantity} | Color: {$ps->color} ({$ps->color_code})\n";
}

echo "\n\nTesting query like in CartController:\n";
$testSizeId = $productSizes->first()->size_id;
echo "Looking for product_id={$product->id} AND size_id={$testSizeId}\n";

$result = App\Models\ProductSize::where('product_id', $product->id)
    ->where('size_id', $testSizeId)
    ->first();

if ($result) {
    echo "FOUND: ID={$result->id}, Qty={$result->quantity}\n";
} else {
    echo "NOT FOUND!\n";
}

echo "\n\n=== All Results (not just first) ===\n";
$allResults = App\Models\ProductSize::where('product_id', $product->id)
    ->where('size_id', $testSizeId)
    ->get();
echo "Count: " . $allResults->count() . "\n";
foreach ($allResults as $r) {
    echo "  ID: {$r->id} | Qty: {$r->quantity} | Color: {$r->color}\n";
}
