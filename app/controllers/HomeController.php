<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/


	// START NAVIGATION METHODS ///////////////
	public function index() 
	{
		return View::make('portfolio.index');
	}

	public function about() 
	{
		return View::make('portfolio.about');
	}

	public function portfolio() 
	{
		return View::make('portfolio.portfolio');
	}

			public function p_entry() 
			{
			return View::make('portfolio.p_entry');
			}

	public function resume() 
	{
		return View::make('portfolio.resume');
	}

	public function blog() 
	{
		return View::make('portfolio.blog');
	}
			public function b_entry() 
			{
				return View::make('portfolio.b_entry');
			}

	// public function showWelcome()
	// {
	// 	return View::make('hello');
	// }

	// public function sayHello($name)
	// {
 //    	$data = array (
 //    		'newName' => $name
 //    		);
 //        return View::make('temp.my-first-view')->with($data);
	// }
}
