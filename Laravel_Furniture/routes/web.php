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



include 'route_admin.php';

Route::group(['namespace' => 'App\\Http\\Controllers\\Frontend'], function() {
    Route::get('', 'HomeController@index')->name('get.home');
    Route::get('san-pham', 'ProductController@index')->name('get.product.list');
    Route::get('san-pham/{slug}', 'ProductDetailController@getProductDetail')->name('get.product.detail');


});


