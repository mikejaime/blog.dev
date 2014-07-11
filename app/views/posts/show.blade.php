@extends('layouts.master')

@section('content')

<div class='container'>
	<table>
		<tr>
			<td><h1 style="font-size: 50px;"> {{{strtoupper($post->title)}}} </h1></td>
			<td>@if (Auth::check())
					<a href="{{ action('PostsController@edit', $post->id) }}" class="btn btn-sm">Edit</a>
				@endif
			</td>
		</tr>
	</table>
	<h6>By: {{{ $post->user->first_name }}} {{{ $post->user->last_name }}}</h6>	
	<small>{{{$post->created_at->format('l, F jS Y @ h:i A')}}}</small><br>
	<div style="padding-top: 10px;">
		@if ($post->img_path)
			<img src="{{{ $post->img_path }}}" class="img-responsive">
		@endif
	</div>
	<div style="padding-top: 20px;">
		{{ $post->renderBody() }}

		{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE')) }}
			{{ Form::submit('Delete', array('class' => 'btn btn-sm')) }}
		{{ Form::close() }}
	</div>
	
</div>

@stop