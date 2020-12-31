<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');

Route::get('shop', 'ShopController@index');

Route::get('product/detail/{slug}', 'ShopController@productDetailPage');

Route::post('detail-product', 'ShopController@productDetail');

Route::post('checkout', 'CheckoutController@checkout');
Route::post('checkout-done', 'CheckoutController@checkoutDone');




Route::prefix('account')->group(function() {
	Route::get('', 'AccountController@index');
	Route::post('', 'AccountController@changeProfile');
});


// Route::get('contoh', function() {
// 	return view('contoh');
// });


Auth::routes();

