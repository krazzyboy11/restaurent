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

Route::get('/', 'HomeController@index')->name('welcome');
Route::get('/menu', 'HomeController@menu')->name('menu');
Route::post('/reservation', 'ReservationController@reserve')->name('reservation.reserve');


Route::get('/contact', 'ContactController@index')->name('contact.index');
Route::post('/contact', 'ContactController@contactSave')->name('contact.save');



Route::get('/cart', 'ProductController@index')->name('cart.index');
Route::get('/cart', 'ProductController@get_item')->name('cart.item');
Route::get('/add-to-cart/{id}', 'ProductController@add_to_cart')->name('product.addToCart');
Route::get('/checkout', 'ProductController@checkout')->name('product.checkout');
Route::post('/checkout', 'ProductController@checkoutInfo')->name('product.checkoutInfo');
Route::get('/orderInfo', 'ProductController@Order');
Route::get('/order', 'ProductController@CompleteOrder')->name('product.orderComplete');
Route::get('/thankyou', 'ProductController@thankYou')->name('customer.thankYou');





Auth::routes();

Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'Admin'], function(){
  Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
  Route::resource('slider','SliderController');
  Route::resource('category','CategoryController');
  Route::resource('item','ItemController');
  Route::get('reservation','ReservationController@index')->name('reservation.index');
  Route::post('reservation/{id}','ReservationController@status')->name('reservation.status');
  Route::delete('reservation/{id}','ReservationController@destroy')->name('reservation.destroy');
  Route::get('orders','OrderController@index')->name('order.index');
  Route::get('orders/{id}','OrderController@cartItem')->name('order.item');
  Route::post('orders/{id}','OrderController@orderStatus')->name('order.status');
  Route::delete('orders/{id}','OrderController@destroy')->name('order.destroy');
  Route::get('/contact', 'ContactController@index')->name('contact.index');
  Route::delete('contact{id}', 'ContactController@destroy')->name('contact.destroy');

});
