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
Route::get('/', 'PagesController@getIndex');

Route::group(['prefix' => 'vendors'], function () {
	Route::get('all', 'VendorsController@getIndex')->name('vendors.all');
	Route::get('all/{name}', 'VendorsController@getCategory')->name('vendors.category')->where('name', '[\w\d\-\_]{5,70}');
});

Route::group(['prefix' => 'profile'], function () {
	Route::get('{name}', 'ProfileController@getProfile')->name('vendors.profile')->where('name', '[\w\d\-\_]{5,70}');
});

Route::group(['prefix' => 'vendor'], function () {
	Route::get('profile', 'VendorController@getProfile')->name('vendor.profile');
	Route::put('update', 'VendorController@update')->name('vendor.update');
	Route::get('projects', 'VendorController@getProjects')->name('vendor.projects');
	Route::post('register', 'Auth\RegisterVendorController@register')->name('vendor.register');
	Route::get('login', 'Auth\LoginVendorController@showLogin')->name('login.vendor');
	Route::post('login', 'Auth\LoginVendorController@login')->name('vendor.login');
	Route::post('logout', 'Auth\LoginVendorController@logout')->name('vendor.logout');
	Route::get('reviews', 'Auth\LoginVendorController@getReviews')->name('vendor.reviews');
	Route::post('projects/create', 'ProjectController@store')->name('projects.create');
	Route::get('projects/{slug}', 'ProjectController@show')->name('projects.view')->where('slug', '[\w\d\-\_]{5,70}');
});

Route::group(['prefix' => 'user'], function () {
	Route::post('register', 'Auth\RegisterCustomerController@register')->name('customer.register');
	Route::get('login', 'Auth\LoginCustomerController@showLogin')->name('login.customer');
	Route::post('login', 'Auth\LoginCustomerController@login')->name('customer.login');
	Route::post('logout', 'Auth\LoginCustomerController@logout')->name('customer.logout');
	Route::get('dashboard', 'CustomerController@getProfile')->name('customer.dashboard');
});
Route::get('blog/category/{name}', ['uses'=> 'BlogController@getCategory', 'as' => 'blog.category'])->where('slug', '[\w\d\-\_]{5,70}');
Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]{5,70}');
Route::get('blog', ['uses'=> 'BlogController@index', 'as' => 'blog.index']);

Route::group(['prefix' => 'admin'], function () {
	Route::get('dashboard', 'AdminController@dashboard')->name('admin.dashboard');
	Route::resource('posts', 'PostController');
	Route::resource('vendors', 'AdminVendorController');
	Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
	Route::post('login', 'Auth\LoginController@login');
	Route::post('logout', 'Auth\LoginController@logout')->name('logout');
	Route::post('password/email','Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
	Route::get('password/reset','Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
	Route::post('password/reset','Auth\ForgotPasswordController@reset');
	Route::get('password/reset/{token}', 'Auth\ForgotPasswordController@showResetForm')->name('password.reset');
});
 Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth:vendor,web']], function () {
     \UniSharp\LaravelFilemanager\Lfm::routes();
 });
Route::get('/vendor/feeds', 'VendorController@index');
Route::get('/home', 'HomeController@index')->name('home');

