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

Route::get('/trail', 'TrailController@trail');

Route::get('/trailSearch', 'TrailController@trailSearch');

Route::GET('/ride', 'RideController@index', ['middleware' => 'auth']);

Route::POST('/ride', 'RideController@store', ['middleware' => 'auth']);

Route::PUT('/ride/{id}', 'RideController@edit', ['middleware' => 'auth']);

Route::DELETE('/ride/{id}', 'RideController@destroy', ['middleware' => 'auth']);

Route::get('/login', 'LoginController@login');

Route::get('/redirect', 'SocialAuthController@redirect');

Route::get('/callback', 'SocialAuthController@callback');

Route::auth();

Route::get('/home', 'HomeController@index');
