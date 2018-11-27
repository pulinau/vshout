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

// not used
Route::get('/homepage', function () {
    return view('homepage');
});

Route::resource('feedbacks', 'FeedbackController');
Route::resource('events', 'EventController');

// Route::get('/feedbacks','FeedbackController@index')
Route::get('/‍feedbacks/{event_id}/', 'FeedbackController@create')->name('feedbacks.create');
Route::post('/feedbacks/{event_id}/', 'FeedbackController@store')->name('feedbacks.store');

Route::get('/host', 'HostController@index')->name('host.index');

Route::get('/volunteer', 'VolunteerController@index')->name('volunteer.index');

// Donation portal
Route::get('/events/{event_id}/donate', 'DonationController@index');
Route::post('/charge/{event_id}', 'CheckoutController@charge');
