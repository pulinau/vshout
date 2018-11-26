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
Route::resource('feedback', 'FeedbackController');

Auth::routes();

<<<<<<< HEAD
=======
// Route::get('/home', 'HomeController@index')->name('home');

>>>>>>> 6530b63f716621495578b9b96ec4c4ee3c30c92f
Route::get('/home', 'HomeController@index')->name('home');
