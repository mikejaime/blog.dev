<?php

class PostsController extends \BaseController {

	public function __construct()
	{
	    // call base controller constructor
	    parent::__construct();

	    // run auth filter before all methods on this controller except index and show
	    $this->beforeFilter('auth.basic', array('except' => array('index', 'show')));
	}
	

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	// VIEW ALL POSTS ///////////////////////
	public function index()
	{
		

		if(Input::has('search'))
		{
			$search = Input::get('search');
			$posts = Post::with('user')->where('title', 'LIKE', "%$search%")->paginate(5);
		}
		else
		{
			$posts = Post::with('user')->orderBy('id', 'DESC')->paginate(5);
		}

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
			$post->user_id = Auth::user()->id;
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->slug = '';
			$post->save();
			if (Input::hasFile('image') && Input::file('image')->isValid())
			{
				$post->addUploadedImage(Input::file('image'));
				$post->save();
			}

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
	public function show($slug)
	{
		$post = Post::where('slug', $slug)->firstOrFail();
		$post->body = Parsedown::instance()->parse($post->body);
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
		$post->user_id = Auth::user()->id;
		$post->title = Input::get('title');
		$post->body = Input::get('body');
		$post->slug = '';
		$post->save();

		if (Input::hasFile('image') && Input::file('image')->isValid())
			{
				$post->addUploadedImage(Input::file('image'));
				$post->save();
			}

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
