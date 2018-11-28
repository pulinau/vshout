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

Route::resource('events', 'EventController');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/notifications', function () {
    return view('notifications');
});

Route::get('/send_mail','notificationController@index');

Route::post('/send_mail/send','notificationController@send');

