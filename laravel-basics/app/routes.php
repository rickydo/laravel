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

Route::get('/', function()
{

$data = [	'name' => 'jane', 
			'email' => 'jane@doe.com',
			'locaton' => 'Florida',
			'last_name' => 'Doe'];

	// return View::make('hello', array('name' => 'friend'));
	// return View::make('hello')->withName('friend');
	// return View::make('hello')->with('name', 'friend');
	return View::make('hello')->withData($data);

});



// if name doesn't exist it defaults to world
// a ? makes having a name optional
// Route::get('/hello/{name?}', function($name = 'world')
// {
// 	return View::make('hello')->with('name', $name);

// });