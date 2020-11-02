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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::group(['middleware' => ['preventbackbutton','auth']],function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/user','Admin\UserController');
    Route::get('user-index','Admin\UserController@index')->name('user_index');
    Route::get('user-create','Admin\UserController@create')->name('user_create');
    Route::resource('/product','Admin\ProductController');
    Route::get('product-index','Admin\ProductController@index')->name('product_index');
    Route::get('product-create','Admin\ProductController@create')->name('product_create');
    Route::resource('/purchase','Admin\PurchaseController');
    Route::get('purchase-index','Admin\PurchaseController@index')->name('purchase_index');
    Route::get('purchase-create','Admin\PurchaseController@create')->name('purchase_create');
    Route::resource('/purchase_account','Admin\PurchaseAccountController');
    Route::get('purchase-account-index','Admin\PurchaseAccountController@index')->name('purchase_account_index');
    Route::get('purchase-account-create','Admin\PurchaseAccountController@create')->name('purchase_account_create');
    Route::resource('/dealer_account','Admin\DealerAccountController');
    Route::get('dealer-account-index','Admin\DealerAccountController@index')->name('dealer_account_index');
    Route::get('dealer-account-create','Admin\DealerAccountController@create')->name('dealer_account_create');
});
