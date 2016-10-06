<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', 'LoginController@index');

Route::group(['middleware'=>'admin'],function(){
	Route::get('admin','AdminController@index');
	Route::post('register','AdminController@register');
	Route::post('admin/remove-user/{id}','AdminController@removeUser');
	Route::get('admin/update-user/{id}','AdminController@updateUser');
	Route::post('admin/save-user/{id}','AdminController@saveUser');	
});

Route::get('module-sell', 'AppController@sell');
Route::get('store', 'AppController@admin');
Route::get('config', 'AppController@config');


Route::post('filter', 'ArticleController@search');

Route::resource('categories', 'CategoryController');
Route::get('categories-list', 'CategoryController@listing');
Route::resource('articles', 'ArticleController');
Route::post('search', 'ArticleController@search');
Route::get('account/{id}','UserController@edit');
Route::post('update-user/{id}','UserController@update')->name('user.update');

Route::post('login','LoginController@login');
Route::get('logout','LoginController@logout');



