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

Route::auth();

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/', 'HomeController@index')->name('home');

Route::get('/product/{id}', 'HomeController@product')->name('product');
Route::get('/cart', 'HomeController@cart')->name('cart');
Route::post('add_cart', 'HomeController@add_cart')->name('add_cart');
Route::get('del_cart/{id}', 'HomeController@del_cart')->name('del_cart');

Route::get('category/{id}', 'HomeController@category')->name('category');
Route::get('clear_cart', 'HomeController@clear_cart')->name('clear_cart');
Route::get('about', 'HomeController@about')->name('about');
Route::get('contact', 'HomeController@contact')->name('contact');
Route::post('update_cart', 'HomeController@update_cart')->name('update_cart');



// Social Auth del_cart

Route::get('oauth/{driver}', 'Auth\SocialAuthController@redirectToProvider')->name('social.oauth');
Route::get('oauth/{driver}/callback', 'Auth\SocialAuthController@handleProviderCallback')->name('social.callback');

Route::group(['middleware' => 'auth'], function () {

  Route::get('checkout', 'HomeController@checkout')->name('checkout');
  Route::post('add_shipping', 'HomeController@add_shipping')->name('add_shipping');
  Route::get('payment/{id}', 'HomeController@payment')->name('payment');

  });


Route::group(['middleware' => 'admin'], function() {

  Route::get('admin/dashboard', 'DashboardController@index')->name('dashboard');
  Route::resource('admin/user', 'StudentController');
  Route::resource('admin/product', 'ProductController');
  Route::resource('admin/category', 'CategoryController');
  Route::get('admin/product_gallery/{id}', 'ProductController@product_gallery');
  Route::post('admin/add_gallery/', 'ProductController@add_gallery');
  Route::post('property_image_del', 'ProductController@property_image_del');
  Route::post('api/api_post_status', 'ProductController@api_post_status');
  Route::resource('admin/order', 'OrderController');
  Route::post('api/api_order_status', 'OrderController@api_order_status');


  });
