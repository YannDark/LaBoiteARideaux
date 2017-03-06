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

/**
 * Routes to all static pages
 */
//index
Route::get('/', 'StaticController@index');
//contact
Route::get('/contact', 'StaticController@contact');
//galerie de couture
Route::get('/galerie/{type}', 'StaticController@galerie');

//connexion
//Route::get('/administration', 'StaticController@galerie');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//administration routes
Route::get('/administration/', 'administration\AdministrationController@index');