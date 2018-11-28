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

Route::group(['middleware'=>'App\Http\Middleware\Volunteer'], function()
{
    Route::get('browse', 'BrowseEventController@index');
    Route::post('events/{event_id}/register',  'BrowseEventController@register')->name('events.register');
});

Route::group(['middleware'=>'App\Http\Middleware\Host'], function()
{
    Route::resource('events', 'EventController', ['except'=> [
        'show'
    ]]);
});

Route::resource('events', 'EventController', ['only'=> [
    'show'
]]);

// Route::get('/feedbacks','FeedbackController@index')
Route::get('/‍feedbacks/{event_id}/', 'FeedbackController@create')->name('feedbacks.create');
Route::post('/feedbacks/{event_id}/', 'FeedbackController@store')->name('feedbacks.store');

Route::get('/host', 'HostController@index')->name('host.index');

Route::get('/volunteer', 'VolunteerController@index')->name('volunteer.index');

// Donation portal
Route::get('/events/{event_id}/donate', 'DonationController@index')->name('events.donate');
Route::post('/charge/{event_id}', 'CheckoutController@charge')->name('charge');
