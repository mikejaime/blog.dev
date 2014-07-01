@extends('layouts.master')

@section('content')
<div class="container">
	<h1>Edit Post:</h1>
	{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}
	<div class='form'>
		{{ Form::label('title', 'Title: ') }}
		{{ Form::text('title', Input::old('title')) }}
		{{ $errors->first('title', '<span class="help-block">:message</span><br>') }}
	</div>
	<div class='form'>
		{{Form::label('body', 'Body: ')}}
		{{ Form::textarea('body') }}
		{{ $errors->first('body', '<span class="help-block">:message</span><br>') }}
	</div>
	<div class='form'>
		{{ Form::submit('Submit') }}
	</div>
	{{ Form::close() }}
</div>
@stop