<?php

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

Route::get('index',[
	'as'=>'trangchu',
	'uses'=>'HomeController@getIndex'
]);
Route::get('detail/{id}',[
	'as'=>'detail',
	'uses'=>'DetailController@getIndex'
]);
Route::get('duongda',[
	'as'=>'duongda',
	'uses'=>'CategoryController@getItemduongda'
]);
Route::get('trangdiem',[
	'as'=>'trangdiem',
	'uses'=>'CategoryController@getItemtrangdiem'
]);
Route::get('add-to-cart/{id}',[
	'as'=>'addcart',
	'uses'=>'CartController@getAddtoCart'
]);
Route::get('cart',[
	'as'=>'cart',
	'uses'=>'CartController@cart'
]);
Route::get('emtycart',[
	'as'=>'emtycart',
	'uses'=>'CartController@emtycart'
]);
Route::get('removeitem/{id}',[
	'as'=>'removeitem',
	'uses'=>'CartController@removeitem'
]);