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
Route::get('formtest', 'homeController@formtest')->name('formtest');
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

// #忘記密碼
// Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('menu','menuController@index')->name('menu');
Route::get('menu/{id}','menuController@show');



// Route::post('submit', 'shoppingcartController@show');
Route::get('cancel/{id}','shoppingcartController@cancelsession')->name('cancel');

Route::get('add-to-cart/{id}', 'shoppingcartController@getAddToCart')->name('product.addcart');

Route::group(['middleware' => ['auth']], function () {
    Route::get('shoppingcart', 'shoppingcartController@getCart')->name('shoppingCart');
});



