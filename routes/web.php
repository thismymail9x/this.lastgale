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


Route::get('/', 'HouseController@getSeller')->name('home');



Route::middleware(['auth'])->group(function () {
    Route::prefix('host')->group(function () {
        Route::get('/rental', "HouseController@create")->name('house.create');
        Route::post('/rental', "HouseController@store")->name('house.store');
        Route::get('/{id}/get-orders',"OrderController@findOrderByUserId")->name('order.cancel');
        Route::get('/{id}/delete-order',"OrderController@deleteOrder")->name('order.delete');
        Route::post('review', 'RatingController@create')->name('ratings.create');
        Route::post('{id}/update-review', 'RatingController@update')->name('ratings.update');
        Route::get('{id}/delete-review', 'RatingController@delete')->name('ratings.delete');
    });
});
Route::get('/rent-house/{id}', 'OrderController@rentHouse')->name('rent');
Route::post('/rent-house', 'OrderController@store')->name('rent.store');
Route::post('/rent-house1', 'OrderController@storeUser')->name('rent.storeUser');


Route::prefix('houses')->group(function () {
    Route::get('/{id}/details', 'HouseController@findById')->name('house.details');
    Route::get('/', 'HouseController@getAll')->name('house.list');
    Route::get('/search', 'HouseController@search')->name('list.search');
    Route::get('/{id}/booked-day', 'HouseController@getBookedDay');
});

Route::prefix('users')->group(function () {
    Route::get('register', 'UserController@create')->name('users.register');
    Route::post('store', 'UserController@store')->name('users.store');
    Route::get('login', 'UserController@login')->name('users.login');
    Route::post('login', 'UserController@loginHandling')->name('users.loginHandling');
    Route::get('logout', 'UserController@logout')->name('users.logout');
    Route::get('/{id}/rent-history','OrderController@show')->name('users.history-show');
    Route::get('/{userId}/rental-list','UserController@rentalList')->name('users.rental-list');
    Route::post('/{id}/change-password','UserController@changePassword')->name('user.changePassword');
    Route::get('/{id}/edit','UserController@findById')->name('user.edit');
    Route::post('/{id}/update','UserController@update')->name('user.update');
    Route::post('forgot-password', 'UserController@sendEmailResetPassword')->name('users.sendEmailResetPassword');
    Route::get('reset-password/{id}', 'UserController@resetPasswordView')->name('users.resetPasswordView');
    Route::post('reset-password/{id}', 'UserController@resetPassword')->name('users.resetPassword');
});
//login google
Route::get('/auth/redirect/{provider}', 'SocialController@redirect')->name('login-google');
Route::get('/callback/{provider}', 'SocialController@callback');
