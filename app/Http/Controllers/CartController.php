<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\ProductSize;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CartController extends Controller
{
    public function createCart()
    {
        $cart = Cart::where("user_id", auth()->user()->id)->first();

        if (empty($cart)) {
            $cart = Cart::create([
                'user_id' => auth()->user()->id,
            ]);
        }

        return $cart;
    }

    public function index()
    {
        $cart = $this->createCart();
        $cartItems = CartItem::with('cart', 'product', 'size')->where("cart_id", $cart->id)->get();

        $totalPrice = 0;
        if (count($cartItems) !== 0) {
            $totalPrice = $cartItems->sum(function ($item) {
                return $item->product->price * $item->quantity;
            });
        }

        $shippingPrice = 5;

        return view("cart.index", [
            'items' => $cartItems,
            'shippingPrice' => $shippingPrice,
            'totalPrice' => $totalPrice,
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'product_id' => ["required"],
            'size' => ["required", Rule::exists("sizes", "id")],
            'quantity' => ["required", "integer", "min:1"],
        ], [
            'size.required' => 'تکایە قەبارەیەک هەڵبژێرە',
            'quantity.required' => 'تکایە ژمارە دابنێ',
            'quantity.min' => 'لانیکەم یەک دانە دەبێت',
        ]);

        // Debug logging
        \Log::info('Cart Store Debug', [
            'product_id' => $request->product_id,
            'size' => $request->size,
            'quantity' => $request->quantity,
            'all_request' => $request->all()
        ]);

        // Check if product size has enough stock - sum all quantities for same product+size
        $productSize = ProductSize::where('product_id', $request->product_id)
            ->where('size_id', $request->size)
            ->first();
            
        // Get total stock for this product + size combination (all colors)
        $totalStockForSize = ProductSize::where('product_id', $request->product_id)
            ->where('size_id', $request->size)
            ->sum('quantity');

        \Log::info('ProductSize Query Result', [
            'found' => $productSize ? 'yes' : 'no',
            'single_quantity' => $productSize ? $productSize->quantity : 'N/A',
            'total_stock_for_size' => $totalStockForSize,
            'requested' => $request->quantity
        ]);

        if (!$productSize) {
            \Log::error('ProductSize not found', [
                'product_id' => $request->product_id,
                'size_id' => $request->size
            ]);
            return redirect()->back()->with("error", "بەداخەوە، ئەم قەبارەیە بەردەست نییە!");
        }

        if ($totalStockForSize < $request->quantity) {
            return redirect()->back()->with("error", "بەداخەوە، تەنها {$totalStockForSize} دانە لە کۆگادا هەیە!");
        }

        $cart = $this->createCart();

        $cartItem = CartItem::where('cart_id', $cart->id)
            ->where('product_id', $request->product_id)
            ->where('size_id', $request->size)
            ->first();

        $totalQuantity = $request->quantity + ($cartItem ? $cartItem->quantity : 0);
        
        if ($totalQuantity > $totalStockForSize) {
            return redirect()->back()->with("error", "بەداخەوە، تەنها {$totalStockForSize} دانە لە کۆگادا هەیە!");
        }

        if (empty($cartItem)) {
            CartItem::create([
                'cart_id' => $cart->id,
                'product_id' => $request->product_id,
                'size_id' => $request->size,
                'quantity' => $request->quantity,
            ]);
        } else {
            $cartItem->quantity += $request->quantity;
            $cartItem->save();
        }

        return redirect()->route('products.index')->with("success", "بەسەرکەوتوویی زیادکرا بۆ سەبەتە!");
    }

    public function update(Request $request, CartItem $cartitem)
    {
        $action = $request->action;

        if (empty($cartitem)) {
            return redirect()->route('cart.index')->with("success", "Product can't be updated!");
        }

        if ($action === "sub" && $cartitem->quantity === 1) {
            $cartitem->delete();
        } else {
            if ($action === "sub") {
                $cartitem->quantity -= 1;
            } else {
                // Check stock before adding
                $productSize = ProductSize::where('product_id', $cartitem->product_id)
                    ->where('size_id', $cartitem->size_id)
                    ->first();
                    
                if ($productSize && $cartitem->quantity + 1 > $productSize->quantity) {
                    return redirect()->route('cart.index')->with("error", "بەداخەوە، تەنها {$productSize->quantity} دانە لە کۆگادا هەیە!");
                }
                
                $cartitem->quantity += 1;
            }

            $cartitem->save();
        }

        return redirect()->route('cart.index')->with("success", "Product successfully updated from cart!");
    }

    public function destroy(CartItem $cartitem)
    {
        if (empty($cartitem)) {
            return redirect()->route('cart.index')->with("success", "Product can't be removed!");
        }

        $cartitem->delete();

        return redirect()->route('cart.index')->with("success", "Product successfully removed from cart!");
    }
}