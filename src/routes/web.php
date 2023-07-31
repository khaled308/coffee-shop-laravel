<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/products/{slug}', [ProductController::class, 'getByName'])->name('product.getByName');


require __DIR__.'/auth.php';
