<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(Request $request, int $orderId)
    {
        $order = Order::where('id', $orderId)->where('status', 'pending')->firstOrFail();
        return view('payment',[
            'order' => $order
        ]);
    }

    public function pay(Request $request, int $orderId){
        $order = Order::where('id', $orderId)->where('status', 'pending')->firstOrFail();
        Payment::create([
            'payment_status' => $request->paymentStatus,
            'payment_amount' => $order->total,
            'order_id' => $order->id,
            'user_id' => auth()->id(),
        ]);
        $order->update([
            'status' => 'paid'
        ]);

        $cart = Cart::where('user_id', auth()->id())->first();
        if ($cart) {
            $cart->cartItems()->delete();
        }
        return redirect()->route('home');
    }
}
