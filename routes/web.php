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
    Route::get('user-index','Admin\UserController@index')->name('user.index');
    Route::get('user-create','Admin\UserController@create')->name('user.create');
    Route::get('product-index','Admin\ProductController@index')->name('product.index');
    Route::get('product-create','Admin\ProductController@create')->name('product.create');
    Route::resource('product','Admin\ProductController');
});
