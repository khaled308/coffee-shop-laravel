<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'payment_method',
        'payment_status',
        'payment_amount',
        'payment_currency',
        'order_id',
        'user_id',
    ];
}
