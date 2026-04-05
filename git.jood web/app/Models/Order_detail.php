<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    //
protected $table="order_details";
protected $fillable=[
    'price',
    'quantity',
    'order_id',
    'product_id',

];
public function orders(){
    return $this->belongsTo(Order::class,'order_id');

}
public function products (){
    return $this->belongsTo(Product::class,'product_id');

}
}
