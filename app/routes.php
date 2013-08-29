<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Route::get('/', 'HomeController@showWelcome');

Route::group(array('prefix' => 'admin'), function() {

	//Route::get('/', 'Admin\AdminController@getIndex');

	Route::controllers(array(
		'user' => 'Admin\UserController',
		'/' => 'Admin\AdminController',
	));

});

Route::controller('/', 'HomeController');

View::composer('templates.main', 'CategoryComposer');