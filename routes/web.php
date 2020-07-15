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


Route::group(['prefix' => 'admin'], function () {
    Route::get('index', 'admin_controller@index')->name('admin_index');
    Route::post('create', 'admin_controller@create_product')->name('create_product');
    Route::post('createcategory', 'admin_controller@create_category')->name('create_category');
    Route::post('posts/store', 'PostController@store');
    Route::get('posts/{id}/edit', 'PostController@edit');
});
Route::group(['prefix' => 'home'], function () {
    Route::get('index', 'home_controller@index')->name('home_index');
    Route::get('product', 'home_controller@product')->name('product');
    Route::get('product_detail/{slug}', 'home_controller@product_detail')->name('product_detail');
});