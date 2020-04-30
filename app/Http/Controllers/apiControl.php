<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class apiControl extends Controller
{
    public function create(Request $r){
    	$product = new Product(); 
    	// Product() is the model name.
    	$product->name = $r->input('name');
    	$product->detail = $r->input('detail');

    	$product->save();
    	return response()->json($product);
    }

    public function show(){
    	$product = Product::all();
    	return response()->json($product);
    }

    public function showById($id){
    	$product = Product::find($id);
    	return response()->json($product);
    }
    
    public function update(Request $r,$id){
    	$product = Product::find($id);

    	$product->name = $r->input('name');
    	$product->detail = $r->input('detail');

    	$product->save();

    	return response()->json($product);
    }

    public function delete(Request $r,$id){
    	$product = Product::find($id);
    	$product->delete();
    	return response()->json($product);
    }
}
