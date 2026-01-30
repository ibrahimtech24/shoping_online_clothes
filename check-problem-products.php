<?php

require __DIR__ . '/vendor/autoload.php';

$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Product;
use App\Models\ProductSize;

// Get products that have some sizes out of stock
$products = Product::with(['productsizes', 'productsizes.size'])->get();

$problemProducts = [];

foreach ($products as $product) {
    $hasInStock = false;
    $hasOutOfStock = false;
    
    foreach ($product->productsizes as $ps) {
        if ($ps->quantity > 0) {
            $hasInStock = true;
        } else {
            $hasOutOfStock = true;
        }
    }
    
    // Products that have BOTH in-stock and out-of-stock sizes
    if ($hasInStock && $hasOutOfStock) {
        $problemProducts[] = [
            'id' => $product->id,
            'name' => $product->name,
            'sizes' => $product->productsizes->map(function($ps) {
                return [
                    'size' => $ps->size->name,
                    'quantity' => $ps->quantity,
                    'status' => $ps->quantity > 0 ? 'بەردەست' : 'نەماوە'
                ];
            })->toArray()
        ];
    }
}

echo "بەرهەمەکان کە هەندێک قەبارەیان هەیە و هەندێکیان نییە:\n";
echo "کۆی گشتی: " . count($problemProducts) . "\n\n";

if (count($problemProducts) > 0) {
    foreach ($problemProducts as $p) {
        echo "بەرهەم #{$p['id']}: {$p['name']}\n";
        foreach ($p['sizes'] as $size) {
            echo "  - {$size['size']}: {$size['quantity']} ({$size['status']})\n";
        }
        echo "\n";
    }
} else {
    echo "هیچ کێشەیەک نەدۆزرایەوە!\n";
    echo "\nوردەکاری گشتی:\n";
    $totalProducts = Product::count();
    $totalProductSizes = ProductSize::count();
    $inStock = ProductSize::where('quantity', '>', 0)->count();
    $outOfStock = ProductSize::where('quantity', '<=', 0)->count();
    
    echo "کۆی بەرهەمەکان: $totalProducts\n";
    echo "کۆی ProductSizes: $totalProductSizes\n";
    echo "بەردەست: $inStock\n";
    echo "نەماوە: $outOfStock\n";
}
