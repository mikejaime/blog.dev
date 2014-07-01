@extends('layouts.master')

@section('content')
<div class="container">
	<h1>Create Post:</h1>
	{{ $errors->first('title', '<span class="help-block">:message</span><br>') }}
	{{ $errors->first('body', '<span class="help-block">:message</span><br>') }}
	<!-- action is sending to the store method in post controller -->
	{{ Form::open(array('action'=>'PostsController@store')) }}

		{{ Form::label('title', 'Title: ') }}
		{{ Form::text('title') }}
		<br>
		{{Form::label('body', 'Body: ')}}
		{{ Form::textarea('body') }}
		<br>
		{{ Form::submit('Submit') }}

	{{ Form::close() }}
</div>
@stop