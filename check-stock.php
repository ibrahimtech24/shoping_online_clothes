<?php

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

use App\Models\ProductSize;
use App\Models\Product;

echo "چەند بەرهەمێک و ژمارەیان لە کۆگادا:\n\n";

$products = Product::with(['productsizes.size'])->take(5)->get();

foreach ($products as $product) {
    echo "بەرهەم: {$product->name}\n";
    foreach ($product->productsizes as $ps) {
        echo "  - قەبارە {$ps->size->name}: {$ps->quantity} دانە\n";
    }
    echo "\n";
}

echo "\nکۆی گشتی ProductSizes: " . ProductSize::count() . "\n";
echo "نموونەیەک لە ProductSize:\n";
$sample = ProductSize::with(['product', 'size'])->first();
if ($sample) {
    echo "Product ID: {$sample->product_id}, Size ID: {$sample->size_id}, Quantity: {$sample->quantity}\n";
}
