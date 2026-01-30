<?php

require __DIR__ . '/vendor/autoload.php';

$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Product;

echo "=== Testing Product Sizes Display ===\n\n";

// Get first 5 products
$products = Product::with('productsizes.size')->take(5)->get();

foreach ($products as $product) {
    echo "بەرهەم: {$product->name}\n";
    echo "کۆی گشتی قەبارەکان: " . $product->productsizes->count() . "\n";
    
    $availableSizes = $product->productsizes->filter(fn($ps) => $ps->quantity > 0);
    echo "قەبارە بەردەستەکان: " . $availableSizes->count() . "\n";
    
    if ($availableSizes->count() > 0) {
        echo "قەبارەکانی بەردەست:\n";
        foreach ($availableSizes->take(7) as $ps) {
            echo "  - {$ps->size->name}: {$ps->quantity} دانە\n";
        }
    } else {
        echo "  ⚠️ هیچ قەبارەیەک بەردەست نییە!\n";
    }
    
    echo "\n";
}
