<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Cart extends Model
{
    //
    protected $table = 'carts';
    protected $fillable = [
        'product_price',
        'quantity',
        'user_id',
        'total_price'
    ];

    // public function products()
    // {
    //     return  $this->belongsTo(Product::class, 'product_id');
    // }

    public function order()
    {
        return  $this->hasMany(Order::class, 'cart_id');
    }

    public function users()
    {
        return  $this->belongsTo(User::class, 'user_id');
    }

}
