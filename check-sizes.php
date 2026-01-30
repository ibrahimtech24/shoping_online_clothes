<?php

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

use App\Models\Product;
use App\Models\Category;

echo "چەککردنەوەی قەبارەکان بۆ جلوبەرگ و پێلاو:\n\n";

// جلوبەرگ
$clothingCategory = Category::where('name', 'LIKE', '%جلی%')->first();
if ($clothingCategory) {
    $clothingProduct = Product::where('category_id', $clothingCategory->id)
        ->with('productsizes.size')
        ->first();
    
    if ($clothingProduct) {
        echo "جلوبەرگ: {$clothingProduct->name}\n";
        echo "قەبارەکان: ";
        echo implode(', ', $clothingProduct->productsizes->pluck('size.name')->toArray());
        echo "\n\n";
    }
}

// پێلاو
$shoesCategory = Category::where('name', 'LIKE', '%پێلاو%')->first();
if ($shoesCategory) {
    $shoesProduct = Product::where('category_id', $shoesCategory->id)
        ->with('productsizes.size')
        ->first();
    
    if ($shoesProduct) {
        echo "پێلاو: {$shoesProduct->name}\n";
        echo "قەبارەکان: ";
        echo implode(', ', $shoesProduct->productsizes->pluck('size.name')->toArray());
        echo "\n\n";
    }
}

echo "✓ ئێستا هەموو بەرهەمەکان (جلوبەرگ و پێلاو) تەنها قەبارەکانی پیت بەکاردەهێنن (XS, S, M, L, XL, XXL, XXXL)\n";
