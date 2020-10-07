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

Route::get('/', function () {
    return view('home');
});

Route::get('product', "App\Http\Controllers\ProductController@showProduct");

Route::get('product/add', "App\Http\Controllers\ProductController@addProduct");
Route::post('product/addProduct', "App\Http\Controllers\ProductController@simpan");

Route::get('product/detailProduct/{product_slug}', "App\Http\Controllers\ProductController@detailProduct");

Route::get('product/editProduct/{product_slug}', "App\Http\Controllers\ProductController@editProduct");
Route::post('product/editProduct/updateProduct/{product_slug}', "App\Http\Controllers\ProductController@update");

Route::get('product/delproduct/{product_slug}', "App\Http\Controllers\ProductController@delProduct");
// Route::get('product/{slug}', "App\Http\Controllers\ProductController@detailProduct");