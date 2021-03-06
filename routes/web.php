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

Route::get('/map', function () {
    return view('map-test');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('garage', 'BikeController');
    Route::post('/borrow/{id}', 'OrderController@borrow')->name('borrow');
    Route::post('locked/{id}', 'BikeController@postLock')->name('bike.post-lock');
    Route::get('/location', 'LocationController@index')->name('location.index');
});