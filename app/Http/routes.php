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

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function() {
    return 'Hello Laravel';
});

// Route::get('welcome/hello', 'WelcomeController@hello');

// Route::get('welcome/page/{id}/{title?}', 'WelcomeController@page')
// 	->where(['id'=>'[0-9]+','title'=>'[a-zA-Z]+']);

Route::resource('welcome','WelcomeController');

Route::get('hello', 'HelloController@index');

Route::resource('articles', 'ArticlesController');
Route::resource('mikrotiks', 'MikrotiksController');
Route::resource('map', 'MapsController');

// Route::auth();

// Route::get('/home', 'HomeController@index');

// Route::controllers(['auth'=>'Auth\AuthController',
// 					'password'=>'Auth\PasswordController']);
Route::resource('dashboard', 'DashboardController');

Route::auth();
