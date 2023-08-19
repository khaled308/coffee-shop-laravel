<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'description',
        'price',
        'category_id',
        'image',
        'stock',
        'active',
        'featured',
        'slug'
    ];

    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
}
