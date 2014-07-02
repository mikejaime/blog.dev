@extends('layouts.master')

@section('content')
	
	<div class='container'>
	<h2>WHAT's ON MIKEY's MIND</h2>
	@foreach ($posts as $post)
		<div>
			<span>
				<h4> {{ link_to_action('PostsController@show', $post->title, array($post->id)) }} </h4>
				<small>{{{$post->created_at->setTimezone('America/Chicago')->diffForHumans()}}}</small><br>
				<p>	{{{$post->body}}} </p>
			</span>
			<span>
				<a href="{{ action('PostsController@edit', $post->id) }}" class="btn btn-default btn-sm">Edit</a>
			</span>			
		</div>
	@endforeach
	<p>{{ $posts->links() }}</p>
	<p>{{ link_to_action('PostsController@create', '::: New Post :::')}}</p>
	</div>

@stop