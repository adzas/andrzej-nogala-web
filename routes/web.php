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

Route::get('/admin', 'AdminController@home');

Route::get('/', 'HomeController@index')->name('home');

Route::resource('gallery','GalleryController');
Route::resource('about','AboutController');
Route::resource('contact','ContactController');

Auth::routes();