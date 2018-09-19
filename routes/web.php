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

Route::get('/contact', 'PagesController@getContact');
Route::post('/contact', 'PagesController@postContact');
Route::get('/about', 'PagesController@getAbout');
Route::get('/home', 'PagesController@getIndex');
Route::get('/vendors', 'VendorController@getIndex');
Route::get('/vendors/profile', 'VendorController@getProfile')->name('vendor.profile');
Route::get('/', 'PagesController@getIndex');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Auth::routes();
Route::get('/vendor/feeds', 'VendorController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/vendor/register', 'Auth\RegisterVendorController@register')->name('vendor.register');
Route::post('/vendor/login', 'Auth\LoginVendorController@login')->name('vendor.login');
