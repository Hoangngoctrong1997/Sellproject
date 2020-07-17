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

Route::get('/', 'home_controller@index')->name('home_index');
Route::group(['prefix' => 'admin'], function () {
    Route::get('index', 'admin_controller@index')->name('admin_index');
    Route::post('create', 'admin_controller@create_product')->name('create_product');
    Route::post('createcategory', 'admin_controller@create_category')->name('create_category');
    Route::post('posts/store', 'PostController@store');
    Route::get('posts/{id}/edit', 'PostController@edit');
});
Route::group(['prefix' => '/'], function () {
    Route::get('trang-chu', 'home_controller@index')->name('trang-chu');
    Route::get('san-pham', 'home_controller@product')->name('san-pham');
    Route::get('chi-tiet-san-pham/{slug}', 'home_controller@product_detail')->name('chi-tiet-san-pham');

    /////ajax/////
     Route::get ('product_by_ajax/{id}','home_controller@get_product_ajax')->name('product_by_ajax');

     Route::POST ('product_by_filter','home_controller@get_product_filter')->name('product_by_filter');

});