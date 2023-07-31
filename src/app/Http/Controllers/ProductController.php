<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // get product by name
    public function getByName(string $slug)
    {
        // find or fail
        $product = Product::where('slug', $slug)->firstOrFail();
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->limit(4)
            ->get();

        return view('product-single', [
            'product' => $product,
            'relatedProducts' => $relatedProducts
        ]);
    }
}
