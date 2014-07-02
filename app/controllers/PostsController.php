<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	// VIEW ALL POSTS ///////////////////////
	public function index()
	{
		// $posts = Post::paginate(5);	
		$posts = Post::orderBy('id', 'DESC')->paginate(5);	
		return View::make('posts.index')->with('posts', $posts);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	// CREATE NEW POST ///////////////////////
	public function create()
	{
		return View::make('posts.create-edit');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// This say get all inputs, check them against rules
		$validator = Validator::make(Input::all(), Post::$rules);

		if ($validator->fails()) 
		{
			Session::flash('errorMessage', 'Oh No, Houston we have a problem...');
			return Redirect::back()->withInput()->withErrors($validator);
		}
		else
		{
			$post = new Post();
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->save();
			Session::flash('successMessage', 'Submitted Successfully');
			return Redirect::action ('PostsController@index');	
		}		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	// SHOW SPECIFIC POST /////////////////////
	public function show($id)
	{
		$post = Post::findOrFail($id);
		return View::make('posts.show')->with('post', $post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::findOrFail($id);
		return View::make('posts.create-edit')->with('post', $post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::findOrFail($id);
		$post->title = Input::get('title');
		$post->body = Input::get('body');
		$post->save();
		Session::flash('successMessage', 'Upadated Successfully');
		return Redirect::action ('PostsController@index');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::findOrFail($id);
		$post->delete();
		Session::flash('successMessage', 'Successfully Deleted');
		return Redirect::action ('PostsController@index');
	}


}
