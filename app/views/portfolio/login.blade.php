@extends('layouts.master')

@section('content')
<div class='container'>
	{{ Form::open(array('action' => 'HomeController@doLogin', 'method' => 'post')) }}
	<h2><span class="glyphicon glyphicon-lock"></span></h2>
	<div class="form-group">
	    <label for="email">Email Address</label>
	    <input type="email" class="form-control" name="email" id="email" placeholder="enter email...">
	  </div>
	  <div class="form-group">
	    <label for="password">Password</label>
	    <input type="password" class="form-control" name="password" id="password" placeholder="password...">
	  </div>
	  <div class="form-group">
    	<div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
	{{ Form::close() }}
</div>
@stop