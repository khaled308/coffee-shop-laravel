<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $users = User::count();
        $products = Product::count();
        $bookings = Booking::count();
        $orders = Order::count();

        return view('admin.index', [
            'users' => $users,
            'products' => $products,
            'bookings' => $bookings,
            'orders' => $orders,
        ]);
    }
}
