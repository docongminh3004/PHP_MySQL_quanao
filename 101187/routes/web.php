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
Route::get('/','homeController@index')->name('home.index'); 
/**
 *  GET => account.index => danh sách
 *  GET => account.create => form thêm mới
 *  POST => account.store => khi submit form thêm mới
 *  GET => account.show => xem chi tiết
 *  GET => account.edit => hiển thị form edit
 *  PUT => account.update => khi submit form edit
 *  DELETE => account.destroy => khi xóa
 */

Route::get('sanpham/','homeController@xemsanpham')->name('home.xemsanpham'); 
//Route::get('sanpham/','productController@chitietsanpham')->name('product.chitietsanpham');
//Route::get('sanpham/','homeController@chitietsanpham')->name('home.chitietsanpham'); 
//Route::get('/admin','productsController@index')->name('admin.index');

//Route::group(['prefix' => 'admin'], function(){
    //Route::get('/', function () {
        //return view('admin.dasboard');
    //});
//});
Route::group(['prefix' => 'admin'], function(){
    Route::get('/', 'AdminController@dashboard')->name('admin.dashboard');

    Route::resources([
        'category' => 'CategoryController',
        'product'  => 'ProductController',
        'banner'   => 'BannerController',
        'account'  => 'AccountController',
        'blog'     => 'BlogController',
        'order'    => 'OrderController',

    ]);
});




//Route::get('/sanpham','products@index')->name('products.index'); 
//Route::get('/home','HomeController@home');
Route::get('xemchitietsp/{id}','homeController@xemchitiet')->name('xemchitiet');

//LiÊN HỆ
Route::get('/lienhe','homeController@lienhe');
//

//CART
//Route::get('xemgiohang/{id}','homeController@giohang')->name('giohang');
Route::get('/save_cart','CartController@save_cart');
Route::get('/show_cart','CartController@show_cart');
Route::get('/delete-to-cart/{rowId}','CartController@delete_to_cart');
Route::post('/update-cart-quantity','CartController@update_cart_quantity');

//Checkout
Route::get('/login-checkout','CheckoutController@login_checkout');
Route::get('/logout-checkout','CheckoutController@logout_checkout');
Route::post('/add-customer','CheckoutController@add_customer');
Route::post('/order-place','CheckoutController@order_place');
Route::post('/login-customer','CheckoutController@login_customer');
Route::get('/checkout','CheckoutController@checkout');
Route::get('/payment','CheckoutController@payment');
Route::post('/save-checkout-customer','CheckoutController@save_checkout_customer');
//Tim Kiem
Route::post('/tim-kiem','homeController@search'); 

//TIN TỨC
Route::get('/tintuc','homeController@tintuc')->name('home.tintuc');