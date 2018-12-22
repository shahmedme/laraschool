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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'namespace' => 'admin'], function() {

    Route::get('/', 'AdminController@dashboard')->name('dashboard');
    Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::get('profile', 'AdminController@profile')->name('profile');

});
