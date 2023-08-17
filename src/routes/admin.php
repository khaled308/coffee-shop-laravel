<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;

Route::get('/admin/login', [AuthController::class, 'loginView'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.store');

Route::middleware('is_admin')->group(function(){
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.index');
    Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');
});