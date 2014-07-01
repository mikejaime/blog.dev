@extends('layouts.master')

@section('content')
<div class="container">
	<h1>Create Post:</h1>
	<!-- action is sending to the store method in post controller -->
	{{ Form::open(array('action'=>'PostsController@store')) }}
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