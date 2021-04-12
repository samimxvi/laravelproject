<?php

use Illuminate\Support\Facades\Route;

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
//     return view('home.index');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/home', 'HomeController@index')->name('home.index');
Route::get('/contact', 'HomeController@contact')->name('home.contact');

// PRODUCTS ADMIN
Route::get('/admin/product', 'ProductsController@list')->name('product.list')->middleware('can:admin, App\User');
Route::get('/admin/product/create', 'ProductsController@create')->name('product.create')->middleware('can:admin, App\User');
Route::post('/admin/product', 'ProductsController@store')->name('product.store')->middleware('can:admin, App\User');
Route::get('/admin/product/{product}/edit', 'ProductsController@edit')->name('product.edit')->middleware('can:admin, App\User');
Route::put('/admin/product/{product}', 'ProductsController@update')->name('product.update')->middleware('can:admin, App\User');
Route::delete('/admin/product/{product}', 'ProductsController@destroy')->name('product.destroy')->middleware('can:admin, App\User');

// PRODUCTS
Route::get('/product', 'ProductsController@index')->name('product.index');
Route::get('/product/category/{category}', 'ProductsController@indexByCategory')->name('product.indexByCategory');
Route::get('/product/{product}', 'ProductsController@show')->name('product.show');
Route::get('/cart', 'ProductsController@cart')->name('product.cart');
Route::get('/add-to-cart/{product}', 'ProductsController@addToCart')->name('product.addToCart');
Route::get('/remove-from-cart/{product}', 'ProductsController@removeFromCart')->name('product.removeFromCart');
Route::get('/clear-cart', 'ProductsController@clearCart')->name('product.clearCart');

// ORDERS ADMIN
Route::get('/admin/order', 'OrderController@list')->name('order.list')->middleware('can:admin, App\User');
Route::delete('/admin/order/{order}', 'OrderController@destroy')->name('order.destroy')->middleware('can:admin, App\User');;

// ORDERS
Route::get('/checkout', 'OrderController@checkout')->name('order.checkout')->middleware('auth');
Route::post('/order', 'OrderController@store')->name('order.store')->middleware('auth');

// ORDER ITEMS
Route::get('/order/{order}/order-items', 'OrderItemController@index')->name('orderItem.index')->middleware('auth');

// USERS ADMIN
Route::get('/admin/user', 'UserController@list')->name('user.list')->middleware('can:admin, App\User');
Route::get('/admin/user/create', 'UserController@create')->name('user.create')->middleware('can:admin, App\User');
Route::post('/admin/user', 'UserController@store')->name('user.store')->middleware('can:admin, App\User');
Route::delete('/admin/user/{user}', 'UserController@destroy')->name('user.destroy')->middleware('can:admin, App\User');

// USERS
Route::get('/profile/orders', 'UserController@orders')->name('user.orders')->middleware('auth');
Route::get('/profile/edit', 'UserController@edit')->name('user.edit')->middleware('auth');
Route::put('/profile', 'UserController@update')->name('user.update')->middleware('auth');

// CATEGORIES ADMIN
Route::get('/admin/category', 'CategoryController@list')->name('category.list')->middleware('can:admin, App\User');
Route::get('/admin/category/create', 'CategoryController@create')->name('category.create')->middleware('can:admin, App\User');
Route::post('/admin/category', 'CategoryController@store')->name('category.store')->middleware('can:admin, App\User');
Route::get('/admin/category/{category}/edit', 'CategoryController@edit')->name('category.edit')->middleware('can:admin, App\User');
Route::put('/admin/category/{category}', 'CategoryController@update')->name('category.update')->middleware('can:admin, App\User');
Route::delete('/admin/category/{category}', 'CategoryController@destroy')->name('category.destroy')->middleware('can:admin, App\User');

// INFO ADMIN
Route::get('/admin/product/{product}/info/edit', 'InfoController@edit')->name('info.edit')->middleware('can:admin, App\User');
Route::put('/admin/product/{product}/info', 'InfoController@update')->name('info.update')->middleware('can:admin, App\User');

// TAG ADMIN
Route::get('/admin/tag', 'TagController@list')->name('tag.list')->middleware('can:admin, App\User');
Route::get('/admin/tag/create', 'TagController@create')->name('tag.create')->middleware('can:admin, App\User');
Route::post('/admin/tag', 'TagController@store')->name('tag.store')->middleware('can:admin, App\User');
Route::get('/admin/tag/{tag}/edit', 'TagController@edit')->name('tag.edit')->middleware('can:admin, App\User');
Route::put('/admin/tag/{tag}', 'TagController@update')->name('tag.update')->middleware('can:admin, App\User');
Route::delete('/admin/tag/{tag}', 'TagController@destroy')->name('tag.destroy')->middleware('can:admin, App\User');