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

Route::get('/contact', 'PagesController@getContact')->name('contact');
Route::post('/contact', 'PagesController@postContact');
Route::get('/about', 'PagesController@getAbout')->name('about');
Route::get('/home', 'PagesController@getIndex');
Route::get('/vendors', 'VendorController@getIndex');
Route::get('/', 'PagesController@getIndex');

Route::group(['prefix' => 'vendor'], function () {
	Route::get('profile', 'VendorController@getProfile')->name('vendor.profile');
	Route::put('update', 'VendorController@update')->name('vendor.update');
	Route::get('projects', 'VendorController@getProjects')->name('vendor.projects');
	Route::post('register', 'Auth\RegisterVendorController@register')->name('vendor.register');
	Route::get('login', 'Auth\LoginVendorController@ShowLogin')->name('login.vendor');
	Route::post('login', 'Auth\LoginVendorController@login')->name('vendor.login');
	Route::post('logout', 'Auth\LoginVendorController@logout')->name('vendor.logout');
	Route::get('reviews', 'Auth\LoginVendorController@getReviews')->name('vendor.reviews');
	Route::post('projects/create', 'ProjectController@store')->name('projects.create');
	Route::get('projects/{slug}', 'ProjectController@show')->name('projects.view')->where('slug', '[\w\d\-\_]{5,70}');
});

Route::group(['prefix' => 'user'], function () {
	Route::post('register', 'Auth\RegisterCustomerController@register')->name('customer.register');
	Route::get('login', 'Auth\LoginCustomerController@ShowLogin')->name('login.customer');
	Route::post('login', 'Auth\LoginCustomerController@login')->name('customer.login');
	Route::post('logout', 'Auth\LoginCustomerController@logout')->name('customer.logout');
});

Route::get('user/login', 'Auth\LoginCustomerController@ShowLogin')->name('login.customer');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
 Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth:vendor']], function () {
     \UniSharp\LaravelFilemanager\Lfm::routes();
 });
Auth::routes();
Route::get('/vendor/feeds', 'VendorController@index');
Route::get('/home', 'HomeController@index')->name('home');

