@extends('layouts.master')

@section('content')
	
	<div class="container pt">
		<!-- PAGE HEADER -->
		<div class="row mt">
			<div class="col-lg-6 col-lg-offset-3 centered">
				<h3>My Blog</h3>
				<hr>
				<p>Let's see what's on Mikey's mind...</p>
			</div>
		</div>
		<!-- SEARCH BAR -->
		<div class='col-lg-8 col-lg-offset-1'>
			{{ Form::open(array('action' => 'PostsController@index', 'class' => 'form-inline', 'role' => 'form', 'method' => 'GET')) }}
				<div class='form-group'>
					{{ Form::text('search', null, array('placeholder' => 'Search Query...', 'class' => 'form-control col-lg-6')) }}
				</div>
				<button type='submit' class='btn btn-default'>Search</button>
			{{ Form::close() }}	
		</div>
		<!-- NEW POST LINK -->
		<div class="col-lg-2 col-lg-offset-8">
			@if (Auth::check())
				{{ link_to_action('PostsController@create', '::: New Post :::')}}
			@endif
		</div>
		<!-- BLOG POSTS -->
		<div class="col-lg-9 col-lg-offset-1">
			@foreach ($posts as $post)
				<table class='table'>
					<hr>
					<tr>
						<!-- POST THUMBNAIL & LINK -->
						
						<div class="col-lg-4">
							@if (isset($post->img_path))
								<a href=" {{ action('PostsController@show', ($post->slug)) }} " class="zoom green"><img src="{{ $post->img_path }}" class="img-responsive"></a>
							@else 
								<a href=" {{ action('PostsController@show', ($post->slug)) }} " class="zoom green"><img src="/img/post-default.jpg" class="img-responsive"></a>
							@endif
						</div>
						<!-- POST DETAILS -->
						<div class="col-lg-8">
							<h4> {{ link_to_action('PostsController@show', strtoupper($post->title), array($post->slug)) }} </h4>
							<h6>By: {{{ $post->user->first_name }}} {{{ $post->user->last_name }}}</h6>
							<small>{{{$post->created_at->setTimezone('America/Chicago')->diffForHumans()}}}</small><br>
							<div style="padding-top: 20px;">{{ substr($post->body, 0, 200) }} {{ link_to_action('PostsController@show', ':::READ MORE:::', array($post->slug)) }}</div>
						</div>
					</tr>
				</table>
						
			@endforeach	
		</div>
		<!-- PAGINATION -->
		<div class="col-lg-6 col-lg-offset-3 centered">
			<p>{{ $posts->links() }}</p>
		</div>
	</div>
	
	

@stop