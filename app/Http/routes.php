<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function(){
	Route::get('/contact', 'PagesController@getContact');
	Route::post('/contact', 'PagesController@postContact');
	Route::get('/about', 'PagesController@getAbout');
	Route::get('/home', 'PagesController@getIndex');
	Route::get('/vendors', 'VendorController@getIndex');
	Route::get('/', 'PagesController@getIndex');
});