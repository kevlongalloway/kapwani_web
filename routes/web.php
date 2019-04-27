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

Route::get('/', 'GuestController@index')->name('landing');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts','PostController');
Route::resource('products','ProductController');

Route::post('posts/search','PostController@search')->name('posts.search');
Route::post('products/search', 'ProductController@search')->name('products.search'); 



Route::get('{any}','DefaultController@handle');
