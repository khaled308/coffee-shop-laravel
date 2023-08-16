<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/products/{slug}', [ProductController::class, 'getByName'])->name('product.getByName');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/cart',[CartController::class, 'index'])->name('cart.index');
    Route::post('/cart', [CartController::class, 'addToCart'])->name('cart.store');
    Route::delete('/cart/{product}', [CartController::class, 'removeItem'])->name('cart.remove');
    // Route::put('/cart/{product}', [CartController::class, 'updateItem'])->name('cart.update');
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
    Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');
    Route::get('/pay/{orderId}', [PaymentController::class, 'index'])->name('payment.index');
    Route::post('/pay/{orderId}', [PaymentController::class, 'pay'])->name('payment.pay');
});


require __DIR__.'/auth.php';
