@extends('layouts.master')

@section('content')
<div class="container">
	<h1>Create Post:</h1>
	{{ $errors->first('title', '<span class="help-block">:message</span><br>') }}
	{{ $errors->first('body', '<span class="help-block">:message</span><br>') }}
	<!-- action is sending to the store method in post controller -->
	<form action="{{{ action('PostsController@store') }}}" method="POST">
		<label for="Title">Title:</label>
		<p>
		<!-- Input::old is making the field sticky -->
		<input type="text" id="title" name="title" value="{{{ Input::old('title') }}}">
		</p>
		<label for="Body">Body:</label>
		<p>
		<textarea id="body" name="body"> {{{ Input::old('body') }}} </textarea>
		</p>
		<input type="submit">
	</form>
</div>
@stop