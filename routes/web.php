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
    
Route::get('menu', 'homeController@index')->name('menu');
Route::get('menu/{id}', 'homeController@show');
Route::post('add', 'homeController@add');
Route::get('cart','homeController@cart')->name('cart');
Route::get('destorycart', 'homeController@destorycart');
Route::get('form/{id}', 'homeController@cancelitem')->name('formcancel');


Route::get('/','bakeryController@home')->name('home');
// Auth::routes();
#登入
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
#登出
Route::post('logout', 'Auth\LoginController@logout')->name('logout'); //post to get

#註冊
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register')->name('register.post');


// Route::get('menu','menuController@index')->name('menu');


// Route::post('submit', 'shoppingcartController@show');
Route::get('cancel/{id}','shoppingcartController@cancelsession')->name('cancel');

Route::get('add-to-cart/{id}', 'shoppingcartController@getAddToCart')->name('product.addcart');

Route::group(['middleware' => ['auth']], function () {
    Route::get('shoppingcart', 'shoppingcartController@getCart')->name('shoppingCart');
});



