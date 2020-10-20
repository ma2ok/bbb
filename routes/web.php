<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\PostDec;

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
    return view('welcome');
});

Auth::routes();

Route::get('/index', 'IndexController@index');
Route::post('/index/delete/{store_id}', 'IndexController@delete');

Route::get('/store', 'StoreController@store');
Route::post('/store/add', 'StoreController@add');

Route::get('/stores/{store_id}/product', 'ProductController@product');
Route::post('/stores/{store_id}/product/addType', 'ProductController@addType');
Route::delete('/stores/{store_id}/product/deleteType', 'ProductController@deleteType');

Route::post('/products/{type_id}/add', 'ProductController@addProduct');
Route::delete('/products/delete', 'ProductController@deleteProduct');

Route::get('/stores/{store_id}/floor', 'FloorController@floor');
Route::post('/stores/{store_id}/floor/upload', 'FloorController@upload');
Route::patch('/stores/{store_id}/floor/position', 'FloorController@position');

Route::delete('/stores/floor/{floor_id}/delete', 'FloorController@delete');
