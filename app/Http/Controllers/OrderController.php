<?php

namespace App\Http\Controllers;

use App\Models\ProductSize;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\State;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{

    public function index()
    {
        $state = request()->input("state");
        $orders = Order::with(["user", "state"])->where("user_id", auth()->user()->id)->filter($state)->latest()->paginate(10)->withQueryString();
        $states = State::latest()->get();

        return view("orders.index", [
            'orders' => $orders,
            'states' => $states,
        ]);
    }

    public function show(Order $order)
    {
        $orderitems = OrderItem::with(["product", "size"])->where("order_id", $order->id)->latest()->get();
        $states = State::latest()->get();

        return view("orders.show", [
            'order' => $order,
            'orderitems' => $orderitems,
            'states' => $states,
        ]);
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            // Get cart items directly from database
            $cart = Cart::where('user_id', auth()->id())->first();
            
            if (!$cart) {
                return redirect()->back()->with("error", "سەبەتەکەت بەتاڵە!");
            }

            $cartItems = \App\Models\CartItem::with(['product', 'size'])
                ->where('cart_id', $cart->id)
                ->get();

            if ($cartItems->isEmpty()) {
                return redirect()->back()->with("error", "سەبەتەکەت بەتاڵە!");
            }

            // Calculate total price
            $totalPrice = $cartItems->sum(function ($item) {
                return $item->product->final_price * $item->quantity;
            });

            // Create order
            $order = Order::create([
                'user_id' => auth()->id(),
                'total_price' => $totalPrice,
            ]);

            // Create order items and update stock
            foreach ($cartItems as $item) {
                // Check stock
                $productsize = ProductSize::where("product_id", $item->product_id)
                    ->where("size_id", $item->size_id)
                    ->first();

                if (!$productsize || $productsize->quantity < $item->quantity) {
                    throw new \Exception("بەداخەوە، کۆگا بەس نییە بۆ {$item->product->name}!");
                }

                // Create order item
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $item->product_id,
                    'size_id' => $item->size_id,
                    'quantity' => $item->quantity,
                    'price' => $item->product->final_price * $item->quantity,
                ]);

                // Update stock
                $productsize->quantity -= $item->quantity;
                $productsize->save();
            }

            // Clear cart
            \App\Models\CartItem::where('cart_id', $cart->id)->delete();
            $cart->delete();

            DB::commit();

            return redirect()->route('orders.index')->with("success", "داواکارییەکەت بەسەرکەوتوویی تۆمارکرا!");
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with("error", $e->getMessage());
        }
    }

    private function createOrderItem($order, $item)
    {
        OrderItem::create([
            'order_id' => $order->id,
            'product_id' => $item->product_id,
            'size_id' => $item->size_id,
            'quantity' => $item->quantity,
            'price' => $item->product->price * $item->quantity,
        ]);
    }

    private function updateProductQuantities($items)
    {
        foreach (json_decode($items) as $item) {
            $productsize = ProductSize::where("product_id", $item->product_id)->where("size_id", $item->size_id)->first();

            if (!$productsize || $productsize->quantity < $item->quantity) {
                throw new \Exception("Oops! We don't have enough stock for one of the products. Please adjust your quantity and try again");
            }

            $productsize->quantity -= $item->quantity;
            $productsize->save();
        }
    }

    private function clearUserCart($userId)
    {
        $cart = Cart::where('user_id', $userId)->first();

        if ($cart) {
            $cart->delete();
        }
    }

}