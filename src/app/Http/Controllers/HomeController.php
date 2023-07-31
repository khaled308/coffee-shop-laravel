<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProducts = Product::where('featured', true)->get();
        return view('index', [
            'featuredProducts' => $featuredProducts
        ]);
    }
}
