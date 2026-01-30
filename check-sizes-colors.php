<?php

require 'vendor/autoload.php';
$app = require 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

echo "=== Product Sizes Table ===\n\n";

$sizes = App\Models\ProductSize::with('size', 'product')->take(10)->get();

foreach($sizes as $s) {
    echo "ID: {$s->id}\n";
    echo "  Product: {$s->product_id} - " . ($s->product->name ?? 'N/A') . "\n";
    echo "  Size ID: {$s->size_id} - " . ($s->size->name ?? 'N/A') . "\n";
    echo "  Color: " . ($s->color ?? 'NULL') . "\n";
    echo "  Color Code: " . ($s->color_code ?? 'NULL') . "\n";
    echo "  Quantity: {$s->quantity}\n";
    echo "---\n";
}

echo "\nTotal product sizes: " . App\Models\ProductSize::count() . "\n";
