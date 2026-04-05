<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
protected $table="orders";
protected $fillable=[
    'order_data',
    'total_price',
    'user_id',
    'cart_id'


];
public function users(){
    return $this->belongsTo(User::class,'user_id');
}
public function order_details(){
    return $this->hasMany(Order_detail::class,'order_id');

}

public function carts(){
    return $this->belongsTo(Cart::class,'cart_id');
}
}
