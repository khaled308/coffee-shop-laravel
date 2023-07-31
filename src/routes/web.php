<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/products/{slug}', [ProductController::class, 'getByName'])->name('product.getByName');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/cart',[CartController::class, 'index'])->name('cart.index');
    Route::post('/cart', [CartController::class, 'addToCart'])->name('cart.store');
    Route::delete('/cart/{product}', [CartController::class, 'removeItem'])->name('cart.remove');
    // Route::put('/cart/{product}', [CartController::class, 'updateItem'])->name('cart.update');
});


require __DIR__.'/auth.php';
