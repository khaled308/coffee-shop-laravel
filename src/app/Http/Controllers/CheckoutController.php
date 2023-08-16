<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('checkout');
    }

    public function store(Request $request)
    {
        $cartItems =  DB::table('cart_items')
                        ->select('cart_items.*', 'products.*')
                        ->join('products', 'cart_items.product_id', '=', 'products.id')
                        ->where('cart_items.cart_id', auth()->user()->cart->id)
                        ->get();
        
        $total = 0;
        foreach ($cartItems as $cartItem) {
            $total += $cartItem->price * $cartItem->quantity;
        }

        // Check if an order with the specified conditions already exists
        $order = Order::where([
            'user_id' => auth()->user()->id,
            'status' => 'pending',
            'total' => $total,
        ])->first();

        // If the order doesn't exist, create it along with order items
        if (!$order) {
            $order = Order::create([
                'user_id' => auth()->user()->id,
                'total' => $total,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'address' => $request->address,
                'city' => $request->city,
                'country' => $request->country,
                'zip_code' => $request->zip_code,
                'status' => 'pending',
                'email' => $request->email,
                'phone' => $request->phone,
            ]);

            // Create order items
            foreach ($cartItems as $cartItem) {
                $order->items()->create([
                    'product_id' => $cartItem->product_id,
                    'quantity' => $cartItem->quantity,
                    'price' => $cartItem->price,
                ]);
            }
        }

        return redirect()->route('payment.index', $order->id);
    }
}
