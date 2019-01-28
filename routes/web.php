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

Route::match(['get', 'post'],'/', 'ProductController@homs')->name('product_id');
Route::get('/product', 'ProductController@product');
Route::get('/product/{id}', 'ProductController@product_id');
Route::get('/homs', function () {
    return view('representation/homs');
});
Route::get('/home_my', 'ProductController@home_my');
Route::get('/about', function () {
    return view('representation/about');
});

Route::get('/blog', function () {
    return view('representation/Blog/blog');
});
Route::get('/blog_detail', function () {
    return view('representation/Blog/blog_detail');
});

Route::get('/contact', function () {
    return view('representation/contact');
});

//Route::get('/product_detail/{id}', 'ProductController@product_detail');
//Route::post('/product_detail/{id}', 'ProductController@ajaxRequestPost');
Route::resource('/product_detail/{id}', 'ProductController', ['only' =>['store','index']]);
//Route::match(['get', 'post'],'/product_detail/{id}', ['uses'=>'ProductController@product_detail', 'as'=>'store']);
//Route::resource('/product_detail/{id}', 'ProductController',['only' => ['index', 'store', 'show', 'destroy']]);
//Route::post('/product_detail/{id}', 'ProductController@ajaxRequestPost');
Route::post('/ajax', 'ProductController@send');

Route::post('/shopping', 'ProductController@insert'); //контролер на добавление тавара в корзину
Route::get('/shopping', function () {
    return view('representation/shopping_cart');
});
Route::get('/index', function () {
    return view('home');
});

Route::get('/primers', function () {
    return view('auth/primer');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
