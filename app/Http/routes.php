<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', 'HomeController@index');

Route::get('/about', 'AboutController@about');

Route::get('/chart', 'ChartController@chart', ['middleware' => 'auth']);

Route::get('/stats', 'StatsController@all', ['middleware' => 'auth']);

Route::get('/stats/month', 'StatsController@month', ['middleware' => 'auth']);

Route::get('/stats/twoWeek', 'StatsController@twoWeek', ['middleware' => 'auth']);

Route::get('/stats/oneWeek', 'StatsController@oneWeek', ['middleware' => 'auth']);

Route::get('/trail', 'TrailController@trail');

Route::get('/trailSearch', 'TrailController@trailSearch');

Route::get('/geoSearch', 'TrailController@geoSearch');

Route::GET('/ride', 'RideController@index', ['middleware' => 'auth']);

Route::POST('/ride', 'RideController@store', ['middleware' => 'auth']);

Route::GET('/ride/edit/{id}', 'RideController@edit', ['middleware' => 'auth']);

Route::PUT('/ride/update/{id}', 'RideController@update', ['middleware' => 'auth']);

Route::DELETE('/ride/{id}', 'RideController@destroy', ['middleware' => 'auth']);

Route::get('/contact', 'ContactController@create');

Route::post('/send', 'ContactController@send');

Route::get('/login', 'LoginController@login');

Route::get('/redirect', 'SocialAuthController@redirect');

Route::get('/callback', 'SocialAuthController@callback');

Route::auth();

Route::get('/home', 'HomeController@index');
