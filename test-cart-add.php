<?php

require __DIR__ . '/vendor/autoload.php';

$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\User;
use App\Models\Product;
use App\Models\ProductSize;
use App\Models\Cart;
use App\Models\CartItem;

echo "=== Testing Cart Functionality ===\n\n";

// Get or create a test user
$user = User::where('email', 'test@test.com')->first();
if (!$user) {
    $user = User::create([
        'name' => 'Test User',
        'email' => 'test@test.com',
        'password' => bcrypt('password'),
    ]);
    echo "✓ Test user created\n";
} else {
    echo "✓ Test user exists\n";
}

// Get a product with sizes
$product = Product::with('productsizes.size')->first();
if (!$product) {
    echo "✗ No products found!\n";
    exit;
}

echo "✓ Product found: {$product->name}\n";
echo "  Available sizes:\n";
foreach ($product->productsizes as $ps) {
    echo "    - {$ps->size->name}: {$ps->quantity} دانە\n";
}

// Get first available size
$productSize = $product->productsizes->first();
if (!$productSize) {
    echo "✗ No sizes available!\n";
    exit;
}

echo "\n✓ Testing with size: {$productSize->size->name}\n";

// Create or get cart for user
$cart = Cart::where('user_id', $user->id)->first();
if (!$cart) {
    $cart = Cart::create(['user_id' => $user->id]);
    echo "✓ Cart created\n";
} else {
    echo "✓ Cart exists\n";
}

// Try to add item to cart
try {
    $cartItem = CartItem::where('cart_id', $cart->id)
        ->where('product_id', $product->id)
        ->where('size_id', $productSize->size->id)
        ->first();
    
    if ($cartItem) {
        $cartItem->quantity += 1;
        $cartItem->save();
        echo "✓ Cart item quantity updated: {$cartItem->quantity}\n";
    } else {
        $cartItem = CartItem::create([
            'cart_id' => $cart->id,
            'product_id' => $product->id,
            'size_id' => $productSize->size->id,
            'quantity' => 1,
        ]);
        echo "✓ Cart item created\n";
    }
    
    echo "\n=== Cart Summary ===\n";
    $cartItems = CartItem::with('product', 'size')->where('cart_id', $cart->id)->get();
    echo "Total items in cart: " . $cartItems->count() . "\n";
    foreach ($cartItems as $item) {
        echo "  - {$item->product->name} ({$item->size->name}) x {$item->quantity}\n";
    }
    
    echo "\n✅ Cart functionality is working!\n";
    echo "\nTest User Credentials:\n";
    echo "Email: test@test.com\n";
    echo "Password: password\n";
    
} catch (Exception $e) {
    echo "✗ Error: " . $e->getMessage() . "\n";
    echo "Stack trace:\n" . $e->getTraceAsString() . "\n";
}
