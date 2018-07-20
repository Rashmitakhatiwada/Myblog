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



Route::get('/z', function () {
    return view('front.master');

});

Route::resource('/category','CategoryController');
Route::resource('/blog','BlogController');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');
Route::get('/', 'frontController@index')->name('home');