@extends('layouts.master')

@section('content')
	
	<h2></h2>
	<div class='container'>
	@foreach ($posts as $post)
		<h4> {{ link_to_action('PostsController@show', $post->title, array($post->id))}} </h4>
		<small>{{{$post->created_at}}}</small><br>
		<p>	{{{$post->body}}} </p>
	@endforeach
	<p>{{ link_to_action('PostsController@create', '::: New Post :::')}}</p>
	</div>

@stop