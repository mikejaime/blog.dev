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
Route::get('/', function(){
	return 'we are home';
});

// Route::get('/sayhello/{name}', function($name)
// {
// 	// return 'View::make('hello')';
// 	if ($name == "Chris")
//     {
//         return Redirect::to('/');
//     }
//     else
//     {
//         return "Hello, $name!";
//     }
// });
Route::get('/resume', function(){
	return 'This is my Resume';
});

Route::get('/portfolio', function(){
	return 'this is my portfolio';
});