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
Route::post('/register', 'ProductController@homs');
Route::get('/product', 'ProductController@product');
Route::get('/product_detail/{id}', 'ProductController@product_id');
Route::get('/product/{id}', 'ProductController@product_id');
Route::get('/search', 'ProductController@search');
Route::get('user-lists', 'SearchUserController@userList')->name('user-lists');
Route::get('/homs', function () {
    return view('representation/homs');
});
Route::get('/home_my', 'ProductController@home_my');

Route::get('/about', 'BlogController@about');
Route::get('/blog', 'BlogController@blog');

Route::get('/blog_detail', function () {
    return view('representation/Blog/blog_detail');
});
Route::get('/contact', 'BlogController@contact');


Route::resource('/product_detail/{id}', 'ProductController', ['only' =>['store','index']]);
Route::post('/ajax', 'ProductController@send');
Route::post('/ajaxtovarid', 'ProductController@tovarform');
Route::post('/shopping', 'ProductController@insert'); //контролер на добавление тавара в корзину

//ajax Sort By - Производитель id
//Route::get('/productsSuppliers', 'ProductController@productsSuppliers');

Route::get('/basket', 'BasketController@basket');
Route::get('/package', 'BasketController@package');
Route::get('/index', function () {
    return view('home');
});

Route::get('/primers', function () {
    return view('auth/primer');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/construct', 'BlogController@construct');
Route::get('/construct/otvet-1', 'BasketController@otvet_one');







Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


/*маршруты по удалению заказа из корзины*/
Route::get('delete-records','StudDeleteController@index');
Route::get('/delete/{id}','StudDeleteController@destroy');

/*маршрут добавления заказа на доставку в бд*/
Route::post('/shop','ShopController@shop');
