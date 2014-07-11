@extends('layouts.master')

@section('content')


<div class="container pt">
    <div class="row mt">
      <div class="col-lg-6 col-lg-offset-3 centered">
        <h3><span class="fa fa-lock"></span> Please Login</h3>
        <hr>
      </div>
    </div>
    <div class="row mt">  
      <div class="col-lg-8 col-lg-offset-2">
        {{ Form::open(array('action' => 'HomeController@doLogin', 'method' => 'post', 'role' => 'form')) }}
          <div class="form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            <br>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            <br>
          </div>
          <div class="form-group checkbox">
            <label>
              <input type="checkbox"> Remember me
            </label>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-default">Sign in</button>
          </div>
        {{ Form::close() }}       
      </div>
    </div><!-- /row -->
  </div><!-- /container -->

@stop