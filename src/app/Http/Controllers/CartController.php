<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index()
    {
        $cartItems =  DB::table('cart_items')
        ->select('cart_items.*', 'products.*')
        ->join('products', 'cart_items.product_id', '=', 'products.id')
        ->where('cart_items.cart_id', auth()->user()->cart->id)
        ->get();
        // dd($cartItems[0]);
        return view('cart', [
            'cartItems' => $cartItems
        ]);
    }

    public function addToCart(Request $request){
        $cart = Cart::firstOrCreate([
            'user_id' => auth()->id()
        ]);

        $product = Product::findOrFail($request->product_id);

        $itemExists = $cart->cartItems()->where('product_id', $product->id)->exists();

        if($itemExists){
            $cart->cartItems()->where('product_id', $product->id)->increment('quantity');
        }
    
        else{
            DB::table('cart_items')->insert([
                'cart_id' => $cart->id,
                'product_id' => $product->id,
                'quantity' => 1,
                'subtotal' => $product->price,
            ]);
        }

        return redirect()->back();
    }

    public function removeItem(Request $request, Product $product){
        CartItem::where('cart_id', auth()->user()->cart->id)->where('product_id', $product->id)->delete();
        return redirect()->route('cart.index');
    }

    public function updateItem(){

    }
}
