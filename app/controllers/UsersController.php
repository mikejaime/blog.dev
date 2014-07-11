<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		

		if(Input::has('search'))
		{
			$search = Input::get('search');
			$users = User::with('user')->where('title', 'LIKE', "%$search%")->paginate(5);
		}
		else
		{
			$users = Post::with('user')->orderBy('id', 'DESC')->paginate(5);
		}

		return View::make('users.index')->with('users', $users);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.create-edit');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// This say get all inputs, check them against rules
		$validator = Validator::make(Input::all(), User::$rules);

		if ($validator->fails()) 
		{
			Session::flash('errorMessage', 'Oh No, Houston we have a problem...');
			return Redirect::back()->withInput()->withErrors($validator);
		}
		else
		{
			$user = new User();
			$user->user_id = Auth::user()->id;
			$user->email = Input::get('email');
			$user->first_name = Input::get('first_name');
			$user->middle_name = Input::get('middle_name');
			$user->last_name = Input::get('last_name');
			$user->role = ;
			$user->save();
			if (Input::hasFile('image') && Input::file('image')->isValid())
			{
				$post->addUploadedImage(Input::file('image'));
				$post->save();
			}

			Session::flash('successMessage', 'Submitted Successfully');
			return Redirect::action ('UsersController@index');	
		}		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::findOrFail($id);
		$user->body = Parsedown::instance()->parse($user->body);
		return View::make('users.show')->with('user', $user);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::findOrFail($id);
		return View::make('users.create-edit')->with('user', $user);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$user = new User();
		$user->user_id = Auth::user()->id;
		$user->email = Input::get('email');
		$user->first_name = Input::get('first_name');
		$user->middle_name = Input::get('middle_name');
		$user->last_name = Input::get('last_name');
		$user->role = ;
		$user->save();
		if (Input::hasFile('image') && Input::file('image')->isValid())
		{
			$post->addUploadedImage(Input::file('image'));
			$post->save();
		}

		Session::flash('successMessage', 'Submitted Successfully');
		return Redirect::action ('UsersController@index');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = User::findOrFail($id);
		$user->delete();
		Session::flash('successMessage', 'Successfully Deleted');
		return Redirect::action ('UsersController@index');
	}


}
