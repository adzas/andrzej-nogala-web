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

Route::post('/ajaxIndex', 'AjaxController@index');
Route::post('/ajaxGallery', 'AjaxController@gallery');
Route::post('/ajaxChangeOrderPictures', 'AjaxController@orderPictures');

Route::resource('pictures','PictureController')->middleware('auth');
Route::resource('about','AboutController')->middleware('auth');
Route::resource('contact','ContactController')->middleware('auth');
Route::resource('categories','CategoryController')->middleware('auth');
Route::patch('category','CategoryController@orderUpdate')->middleware('auth');
Route::patch('category/{id}/edit','CategoryController@updateSwitch')->middleware('auth');

Auth::routes();