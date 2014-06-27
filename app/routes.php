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

// START NAVIGATION ROUTES ///////////////////////
Route::get('/index', 'HomeController@index');

Route::get('/about', 'HomeController@about');

Route::get('/portfolio', 'HomeController@portfolio');
	Route::get('/p_entry', 'HomeController@p_entry');

Route::get('/resume', 'HomeController@resume');

Route::get('/blog', 'HomeController@blog');

Route::get('/contact', 'HomeController@contact');
///// END NAVIGATION ROUTES ////////////////////

Route::resource('/posts', 'PostsController');



// Route::get('/', function(){
// 	// route handles folder "/" with "."
// 	// does not need file ext because it knows its PHP
// 	// 'View' is a constant, '::'
// 	return View::make('temp.my-first-view'); 
// });

// whatever is passed after contacts. in browser becomes id var

// Route::get('/contacts/{id}', function($contactId){
// 	return View::make('contact.show')->with('contact_id', $contactId); // with key, value
// });

// Route::get('/'

// Route::get('/sayhello/{name}', 'HomeController@sayHello')

// // roll dice guess game
// Route::get('/rolldice/{guess}', function($rollGuess){
// 	if (!is_numeric($rollGuess)){
// 		return Redirect::to('/roll-dice');
// 	} else {
// 		$random = rand(1, 6);
// 		$data = array(
// 			'newRandom' => $random,
// 			'newRollGuess' => $rollGuess
// 			);
// 		return View::make('temp.roll-dice')->with($data);
// 	}	
// });