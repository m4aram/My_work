<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function index(){
        $productCount=Product::count();
        // $products=Product::orderby('id','desc')->take(6)->get();
        // return view('front.index',compact('productCount','$products'));
        $products=Product::with('categories')->orderby('id','desc')->take(6)->get();
        return view('front.index',compact('productCount','products'));


        
    }




}
