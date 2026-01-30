<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;

class PageController extends Controller
{
    public function home()
    {
        // Get categories
        $categories = Category::withCount('products')->limit(6)->get();
        
        // Get featured, new, and trending products
        $featuredProducts = Product::where('is_featured', true)->with(['category', 'subcategory', 'productsizes'])->limit(8)->latest()->get();
        $newProducts = Product::where('is_new', true)->with(['category', 'subcategory', 'productsizes'])->limit(8)->latest()->get();
        $trendingProducts = Product::where('is_trending', true)->with(['category', 'subcategory', 'productsizes'])->limit(8)->latest()->get();
        
        // Fallback to latest products if no featured/new/trending products exist
        $products = $featuredProducts->count() > 0 ? $featuredProducts : Product::with(['category', 'subcategory', 'productsizes'])->limit(8)->latest()->get();

        return view("website.index", [
            'categories' => $categories,
            'products' => $products,
            'featuredProducts' => $featuredProducts,
            'newProducts' => $newProducts,
            'trendingProducts' => $trendingProducts,
        ]);
    }

    public function dashboard()
    {
        $products = Product::limit(8)->latest()->get();
        $product = count(Product::all());
        $user = count(User::all());
        $order = count(Order::all());
        $orderpending = count(Order::where("state_id", 1)->get());
        $orderaccepted = count(Order::where("state_id", 2)->get());
        $orderfinished = count(Order::where("state_id", 3)->get());

        return view("dashboard.index", [
            "products" => $products,
            "product" => $product,
            "user" => $user,
            "order" => $order,
            "orderpending" => $orderpending,
            "orderaccepted" => $orderaccepted,
            "orderfinished" => $orderfinished,
        ]);
    }
}
