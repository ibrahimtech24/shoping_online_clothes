<?php

require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

echo "=== Searching for بلووزی ڕەنگاوڕەنگ ===\n\n";

// Search for products with similar name
$products = App\Models\Product::where('name', 'LIKE', '%ڕەنگاوڕەنگ%')->get();

if ($products->isEmpty()) {
    echo "No products found with that name. Searching for بلووز...\n";
    $products = App\Models\Product::where('name', 'LIKE', '%بلووز%')->take(10)->get();
}

foreach ($products as $p) {
    echo "\n=== Product ID: {$p->id} ===\n";
    echo "Name: {$p->name}\n";
    echo "Price: \${$p->price}\n";
    
    $totalStock = $p->getTotalStock();
    echo "Total Stock (from method): {$totalStock}\n";
    echo "Is Out of Stock: " . ($p->isOutOfStock() ? 'YES' : 'NO') . "\n";
    
    echo "\nProductSizes:\n";
    $sizes = $p->productsizes;
    echo "Count: " . $sizes->count() . "\n";
    
    if ($sizes->count() == 0) {
        echo "  NO SIZES FOUND!\n";
        
        // Check directly in database
        $directSizes = App\Models\ProductSize::where('product_id', $p->id)->get();
        echo "  Direct query count: " . $directSizes->count() . "\n";
    } else {
        foreach ($sizes as $ps) {
            echo "  Size ID: {$ps->size_id} | Qty: {$ps->quantity} | Color: {$ps->color}\n";
        }
    }
}

// Also check products with 0 stock
echo "\n\n=== Products with 0 total stock ===\n";
$allProducts = App\Models\Product::with('productsizes')->get();
$zeroStockProducts = $allProducts->filter(function($p) {
    return $p->getTotalStock() == 0;
});

echo "Found " . $zeroStockProducts->count() . " products with 0 stock\n";
foreach ($zeroStockProducts->take(5) as $p) {
    echo "  ID: {$p->id} - {$p->name}\n";
    echo "    ProductSizes count: " . $p->productsizes->count() . "\n";
}
