<?php

require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

echo "=== Adding ProductSizes to products with 0 stock ===\n\n";

// Get all sizes
$sizes = App\Models\Size::all();
echo "Available sizes: " . $sizes->pluck('id')->implode(', ') . "\n\n";

// Colors
$colors = [
    ['name' => 'ڕەش', 'code' => '#1F2937'],
    ['name' => 'سپی', 'code' => '#FFFFFF'],
    ['name' => 'شین', 'code' => '#3B82F6'],
    ['name' => 'سوور', 'code' => '#EF4444'],
    ['name' => 'سەوز', 'code' => '#22C55E'],
    ['name' => 'زەرد', 'code' => '#EAB308'],
    ['name' => 'مۆر', 'code' => '#A855F7'],
    ['name' => 'پەمەیی', 'code' => '#EC4899'],
];

// Get products with 0 stock
$allProducts = App\Models\Product::with('productsizes')->get();
$zeroStockProducts = $allProducts->filter(function($p) {
    return $p->getTotalStock() == 0;
});

echo "Found " . $zeroStockProducts->count() . " products with 0 stock\n\n";

foreach ($zeroStockProducts as $product) {
    echo "Adding sizes to: {$product->id} - {$product->name}\n";
    
    // Add 4-6 random sizes
    $randomSizes = $sizes->random(rand(4, min(6, $sizes->count())));
    
    foreach ($randomSizes as $size) {
        $color = $colors[array_rand($colors)];
        $quantity = rand(15, 80);
        
        App\Models\ProductSize::create([
            'product_id' => $product->id,
            'size_id' => $size->id,
            'quantity' => $quantity,
            'color' => $color['name'],
            'color_code' => $color['code'],
        ]);
        
        echo "  Added size {$size->name}: qty={$quantity}, color={$color['name']}\n";
    }
}

echo "\n=== Done! ===\n";

// Verify
$stillZero = App\Models\Product::with('productsizes')->get()->filter(function($p) {
    return $p->getTotalStock() == 0;
});
echo "Products still with 0 stock: " . $stillZero->count() . "\n";
