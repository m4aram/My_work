<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
protected $table="products";
protected $fillable=[
    'name',
    'description',
    'price',
    'image',
    'category_id',
];
public function categories(){
    return $this->belongsTo(Category::class,'category_id');

}
public function order_details(){
    return $this->hasMany(Order_detail::class,'product_id');

}

public function orders(){
    return $this->belongsToMany(Order::class,'order_details');

}

}
