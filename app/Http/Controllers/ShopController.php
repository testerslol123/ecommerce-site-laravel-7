<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ShopController extends Controller
{
    //
    public function productDetail(Request $request) {
    	$request->validate([
    		'id' => 'required'
    	]);

    	$product = Product::where('id', $request->id)->first();
    	if ($product) {
    		return response()->json([
    			'status' => "success",
    			'data' => $product
    		]);
    	} else {
    		return response()->json([
    			'status' => "failed"
    		]);
    	}



    }
}
