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
    return view('representation/homs');
});
Route::get('/product', function () {
    return view('representation/product');
});
Route::get('/homs', function () {
    return view('representation/homs');
});
Route::get('/homs', function () {
    return view('layouts/home_my');
});
Route::get('/about', function () {
    return view('representation/about');
});
Route::get('/index', function () {
    return view('home');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

