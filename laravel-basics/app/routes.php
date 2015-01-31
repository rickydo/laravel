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

Route::get('/', 'TodoListController@index');
Route::resource('todos', 'TodoListController');

Route::get('/db', function(){
	$result = DB::table('todo_lists')->where('name', "Ricky's List")->first();
	return $result->name;
});

// Event::listen('illuminate.query', function($query){
// 	var_dump($query);
// });
// Route::get('todos', 'TodoListController@index');
// Route::get('todos/{id}', 'TodoListController@show');


// / = home
// /todos -> all lists
// /todos/1 -> show
// /todos/1/edit - edit and update
// /todos/create - create new list


// to bring up the current routes
// homestead ssh->Sites->laravel basics-> php artisan routes

// to bring up the artisan commands 
// php artisan help


