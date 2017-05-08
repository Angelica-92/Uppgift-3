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
    return view('products.start');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Demands user to be logged in to access pages
Route::group(["middleware" => "auth"], function () {
  Route::resource('products', 'ProductsController', ['except' => [
      'show', 'index', 'start'
  ]]);
  Route::resource('reviews', 'ReviewsController', ['except' => [
      'show', 'index', 'start'
  ]]);
  Route::resource('stores', 'StoresController', ['except' => [
      'show', 'index', 'start'
  ]]);
});

//index and show can be accessed without being logged in
Route::resource('products', 'ProductsController', ['only' => [
    'index', 'show', 'start'
]]);
Route::resource('reviews', 'ReviewsController', ['only' => [
    'index', 'show', 'start'
]]);
Route::resource('stores', 'StoresController', ['only' => [
    'index', 'show', 'start'
]]);
