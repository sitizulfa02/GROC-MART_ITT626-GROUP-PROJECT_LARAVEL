<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//User

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users', 'UserController@index')->name('users.index');
//create@write
Route::get('/users/create', 'UserController@create')->name('users.create');
//store@save
Route::post('/users', 'UserController@store')->name('users.store');
//show
Route::get('/users/{user}', 'UserController@show')->name('users.show');
//edit
Route::get('/users/{user}/edit', 'UserController@edit')->name('users.edit');
//update
Route::put('/users/{user}', 'UserController@update')->name('users.update');
//delete@destroy
Route::delete('/users/{user}', 'UserController@destroy')->name('users.destroy');

//Product

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products', 'ProductController@index')->name('products.index');
//create@write
Route::get('/products/create', 'ProductController@create')->name('products.create');
//store@save
Route::post('/products', 'ProductController@store')->name('products.store');
//show
Route::get('/products/{product}', 'ProductController@show')->name('products.show');
//edit
Route::get('/products/{product}/edit', 'ProductController@edit')->name('products.edit');
//update
Route::put('/products/{product}', 'ProductController@update')->name('products.update');
//delete@destroy
Route::delete('/products/{product}', 'ProductController@destroy')->name('products.destroy');

//Categories

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/categories', 'CategoryController@index')->name('categories.index');
//create@write
Route::get('/categories/create', 'CategoryController@create')->name('categories.create');
//store@save
Route::post('/categories', 'CategoryController@store')->name('categories.store');
//show
Route::get('/categories/{category}', 'CategoryController@show')->name('categories.show');
//edit
Route::get('/categories/{category}/edit', 'CategoryController@edit')->name('categories.edit');
//update
Route::put('/categories/{category}', 'CategoryController@update')->name('categories.update');
//delete@destroy
Route::delete('/categories/{category}', 'CategoryController@destroy')->name('categories.destroy');

//Location

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/locations', 'LocationController@index')->name('locations.index');
//create@write
Route::get('/locations/create', 'LocationController@create')->name('locations.create');
//store@save
Route::post('/locations', 'LocationController@store')->name('locations.store');
//show
Route::get('/locations/{location}', 'LocationController@show')->name('locations.show');
//edit
Route::get('/locations/{location}/edit', 'LocationController@edit')->name('locations.edit');
//update
Route::put('/locations/{location}', 'LocationController@update')->name('locations.update');
//delete@destroy
Route::delete('/locations/{location}', 'LocationController@destroy')->name('locations.destroy');

//Customer Booking

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/bookings', 'BookingController@index')->name('bookings.index');
//create@write
Route::get('/bookings/create', 'BookingController@create')->name('bookings.create');
//store@save
Route::post('/bookings', 'BookingController@store')->name('bookings.store');
//show
Route::get('/bookings/{booking}', 'BookingController@show')->name('bookings.show');
//edit
Route::get('/bookings/{booking}/edit', 'BookingController@edit')->name('bookings.edit');
//update
Route::put('/bookings/{booking}', 'BookingController@update')->name('bookings.update');
//delete@destroy
Route::delete('/bookings/{booking}', 'BookingController@destroy')->name('bookings.destroy');

//Payment 

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/payments', 'PaymentController@index')->name('payments.index');
//create@write
Route::get('/payments/create', 'PaymentController@create')->name('payments.create');
//store@save
Route::post('/payments', 'PaymentController@store')->name('payments.store');
//show
Route::get('/payments/{payment}', 'PaymentController@show')->name('payments.show');
//edit
Route::get('/payments/{payment}/edit', 'PaymentController@edit')->name('payments.edit');
//update
Route::put('/payments/{payment}', 'PaymentController@update')->name('payments.update');
//delete@destroy
Route::delete('/payments/{payment}', 'PaymentController@destroy')->name('payments.destroy');

//Route ::resource('/students', 'StudentController')

//Route ::resource('/subjects', 'SubjectController')

//Route ::resource('/timetables', 'TimetableController')

//Route ::resource('/groups', 'GroupController')


