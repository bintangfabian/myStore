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
Route::get('detailProduct/{product_slug}', "App\Http\Controllers\ProductController@detailProduct");
Route::get('editProduct/{product_slug}', "App\Http\Controllers\ProductController@editProduct");
Route::post('editProduct/updateProduct/{product_slug}', "App\Http\Controllers\ProductController@updateProduct");
Route::get('delproduct/{product_slug}', "App\Http\Controllers\ProductController@delProduct");
// Route::get('product/{slug}', "App\Http\Controllers\ProductController@detailProduct");