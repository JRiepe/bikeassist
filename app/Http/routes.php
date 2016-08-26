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

Route::get('/chart', 'ChartController@chart');

Route::get('/trail', 'TrailController@trail');

Route::get('/ride', 'RideController@ride');

//Route::get('/auth/facebook', 'Auth\AuthController@redirectToProvider');

//Route::get('/auth/facebook/callback', 'Auth\AuthController@handleProviderCallback');

Route::get('/login', 'LoginController@login');

Route::get('/redirect', 'SocialAuthController@redirect');

Route::get('/callback', 'SocialAuthController@callback');

Route::auth();

Route::get('/home', 'HomeController@index');
