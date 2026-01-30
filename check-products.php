<?php

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

use App\Models\Category;

$categories = Category::withCount('products')->get();

echo "تەواوی بەرهەمەکان لە داتابەیس:\n\n";

foreach ($categories as $cat) {
    echo $cat->name . ": " . $cat->products_count . " بەرهەم\n";
}

echo "\n\nکۆی گشتی: " . $categories->sum('products_count') . " بەرهەم\n";
