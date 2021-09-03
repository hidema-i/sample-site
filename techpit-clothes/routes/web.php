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

// Route::get('/', function () {
//     return view('welcome');
// });

// //ProductController
// Route::get('/', 'ProductController@index')->name('product.index');

// //商品のIDに紐付け
// Route::get('/product/{id}', 'ProductController@show')->name('product.show');

Route::name('product.')
    ->group(function () {
        Route::get('/', 'ProductController@index')->name('index');
        Route::get('/product/{id}', 'ProductController@show')->name('show');
    });
