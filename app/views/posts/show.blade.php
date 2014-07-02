@extends('layouts.master')

@section('content')

<div class='container'>
	<h3> {{{$post->title}}} </h3>
	<small>{{{$post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A')}}}</small><br>
	<p>	{{{$post->body}}} </p>

	{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE')) }}
		{{ Form::submit('Delete') }}
	{{ Form::close() }}
</div>

@stop