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
Route::post('/ajaxid', 'ProductController@getajaxid');
Route::get('/product', 'ProductController@product');
Route::get('/product/{id}', 'ProductController@product_id');
Route::get('/search', 'ProductController@search');
Route::get('user-lists', 'SearchUserController@userList')->name('user-lists');

Route::get('/homs', function () {
    return view('representation/homs');
});
Route::get('/homs', function () {
    return view('layouts/home_my');
});
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
Route::get('/shopping', function () {
    return view('representation/shopping_cart');
});
Route::get('/product_detail', function () {
    return view('representation/product_detail');
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
