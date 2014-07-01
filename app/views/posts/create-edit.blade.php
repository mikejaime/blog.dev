@extends('layouts.master')

@section('content')

<div class="container">
	@if (isset($post))
		<h1>Edit Post:</h1>
		{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}
	@else
		<h1>Create Post:</h1>
		{{ Form::open(array('action'=>'PostsController@store')) }}
	@endif

	<div>
		{{ Form::label('title', 'Title: ') }}
		{{ Form::text('title') }}
		{{ $errors->first('title', '<span class="help-block">:message</span><br>') }}
	</div>
	<div>
		{{Form::label('body', 'Body: ')}}
		{{ Form::textarea('body') }}
		{{ $errors->first('body', '<span class="help-block">:message</span><br>') }}
	</div>
	<div>
		{{ Form::submit('Submit') }}
	</div>		
	{{ Form::close() }}
</div>

@stop