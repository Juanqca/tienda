<?php

namespace mercado\Http\Controllers;

use Illuminate\Http\Request;
use mercado\Http\Requests;
use mercado\Http\Controllers\Controller;
use mercado\Product;
class StoreController extends Controller
{
    public function index()
    {
    	$products=Product::all();
    	//dd($products);
    	//return "hola mundo!!";
    	return view('store.index',compact('products'));
    }
    public function show($slug)
    {
    	$product=Product::where('slug',$slug)->first();
    	//dd($product);
    	return view('store.show',compact('product'));
    }
}
