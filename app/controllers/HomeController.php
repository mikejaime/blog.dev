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

	// START USER LOGIN AUTH ///////////////////
	public function showLogin()
	{
		return View::make('portfolio.login');
	}


	public function doLogin()
	{
		$email = Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(array('email' => $email, 'password' => $password)))
		{
			Session::flash('successMessage', 'login successful!');
			return Redirect::intended(action('HomeController@index'));
		}
		else
		{
			Session::flash('errorMessage', 'email or password not found!');
			return Redirect::action('HomeController@showLogin')->withInput();
		}
	}

	public function logout()
	{
		Auth::logout();
		Session::flash('successMessage', 'logout successful!');
		return Redirect::action('HomeController@index');
	}

	// public function showWelcome()
	// {
		
	// }
	// END USER AUTH //////////////////////////


	// START NAVIGATION METHODS ///////////////
	public function index() 
	{
		return View::make('portfolio.about');
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

	public function contact() 
	{
		return View::make('portfolio.contact');
	}

}
