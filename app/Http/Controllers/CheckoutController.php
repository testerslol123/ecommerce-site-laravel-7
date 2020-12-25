<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Order;


class CheckoutController extends Controller
{
    //
    public function checkout(Request $request) {
    	// dd($request->all());
    	/*
		  "_token" => "qEjdpLOMbOKDVjfcMqfL9nL5gpYstIAY7OcdBM92"
		  "product_id" => "2"
		  "pilihan_warna" => "Autumn Choco"
		  "sizes" => "2-3thn"
		  "quantity" => "1"
    	*/
    	$data['product'] = $product = Product::where('id', $request->product_id)->first();

    	$data['pilihan_warna'] = $request->pilihan_warna;
    	$data['pilihan_size'] = $request->sizes;
    	$data['quantity'] = $request->quantity;

    	$data['subtotal_price'] = ($request->quantity * $product->final_price);
    	$data['grand_total'] = $data['subtotal_price'] + 10000;


    	return view('checkout.checkout', $data);
    }

    public function checkoutDone(Request $request) {
    	$first_name = $request->first_name;
    	$last_name = $request->last_name;
    	$alamat = $request->alamat;
    	$kelurahan = $request->kelurahan;
    	$kecamatan = $request->kecamatan;
    	$kode_pos = $request->kode_pos;
    	$email = $request->email;
    	$phone_number = $request->phone_number;
    	$product_id = $request->product_id;
    	$pilihan_warna = $request->pilihan_warna;
    	$pilihan_size = $request->pilihan_size;
    	$quantity = $request->quantity;

    	$product = Product::where('id', $request->product_id)->first();
    	
    	$order = new Order;
    	$order->nama = $first_name .' '. $last_name;
    	$order->telp_no = $phone_number;
    	$order->email = $email;
    	$order->alamat = $alamat;
    	$order->kelurahan = $kelurahan;
    	$order->kecamatan = $kecamatan;
    	$order->kodepos = $kode_pos;
    	$order->grand_total = $request->quantity * $product->final_price;
    	$order->grand_total = rand(1,100) + $order->grand_total;
    	$order->status = 1;
    	$order->products = $product->name .', ' . $request->pilihan_warna .', '. $request->pilihan_size . ', Quantity: ' . $request->quantity;
    	$order->save();

    	$data['pilihan_warna'] = $request->pilihan_warna;
    	$data['pilihan_size'] = $request->pilihan_size;
    	$data['quantity'] = $request->quantity;

    	$data['subtotal_price'] = ($request->quantity * $product->final_price);
    	$data['grand_total'] = $data['subtotal_price'] + 10000;
    	$data['order'] = $order;
    	$data['product'] = $product;

    	return view('checkout.checkout-done', $data);
    }
}
