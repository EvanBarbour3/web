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

Route::get('/', array('uses' => 'BarbourController@main'));

//NO DONT DO IT OK
//Route::get('/{page}', array('uses' => 'BarbourController@index', 'page' => 'home'));

Route::get('about', 'BarbourController@about');

Route::get('googlef7f5143c8a3bc758.html','GoogleController@GoogleVerification');

Route::controllers([
	'Barbour' => 'BarbourController',
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
