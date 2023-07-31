<?php

namespace App\Models;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CartItem extends Model
{
    use HasFactory;
    protected $fillable = ['cart_id', 'product_id', 'quantity', 'subtotal'];

    public $timestamps = false;
    protected $table = 'cart_items';
    protected $primaryKey = ['cart_id', 'product_id'];
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
