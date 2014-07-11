<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="shortcut icon" href="/favicon.ico"> -->
    <link rel="icon" href="/favicon.ico" />

    <title>Michael Jaime</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/stanley-bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/stanley-main.css" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="/css/pagedown.css" />

    <script type="text/javascript" src="/pagedown/Markdown.Converter.js"></script>
    <script type="text/javascript" src="/pagedown/Markdown.Sanitizer.js"></script>
    <script type="text/javascript" src="/pagedown/Markdown.Editor.js"></script>
</head>
<body>   

    <!-- Static navbar -->
    <div class="navbar navbar-inverse navbar-static-top">
	      <div class="container">
	        <div style="position: relative; bottom: 65px">
	           @if (Auth::check())
                        <table>
                            <tr class="login-buttons" style="color: white">
                                <td class="fa fa-user fa-sm" style="padding-right: 2px;"></td>
                                <td style="padding-right: 30px;">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</td>
                                <td class="login-buttons" style="padding-right: 10px;">{{ link_to_action('HomeController@logout', 'Logout')}}</td>
                            </tr>
                        </table>
                    @else
                        <!-- user not NOT logged in -->
                        <table>
                            <tr class="login-buttons" style="color: white">
                                <td class="fa fa-lock fa-sm" style="padding-right: 2px;"></td>
                                <td class="login-buttons">{{ link_to_action('HomeController@showLogin', 'Login') }}</td>
                            </tr>
                        </table>
                        <span class="login-buttons"></span>
                    @endif
	        </div>
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="/index"><img src="/img/mikejaime-logo-small.png"></a>
	        </div>
	        <div class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="/about">About</a></li>
	            <li><a href="/portfolio">Portfolio</a></li>
	            <li><a href="/resume">Resume</a></li>
	            <li><a href="/blog">Blog</a></li>
	            <li><a href="/contact">Contact</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->

	      </div>
    </div>

<div class="container">

	@if (Session::has('successMessage'))
        <div class="alert alert-success" id="fade_message">{{{ Session::get('successMessage') }}}</div>
    @endif
    @if (Session::has('errorMessage'))
        <div class="alert alert-danger" id="fade_message">{{{ Session::get('errorMessage') }}}</div>
    @endif

	@if (isset($post))
		<div class="row mt">
			<div class="col-lg-6 col-lg-offset-3 centered">
				<h3>EDIT POST</h3>
				<hr>
			</div>
		</div>
		{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT', 'files' => true)) }}
	@else
		<div class="row mt">
			<div class="col-lg-6 col-lg-offset-3 centered">
				<h3>CREATE POST</h3>
				<hr>
			</div>
		</div>
		{{ Form::open(array('action'=>'PostsController@store', 'files' => true)) }}
	@endif
	<div class="row mt">	
		<div class="col-lg-8 col-lg-offset-2">
			<div class="form-group">
			{{ Form::text('title', null, array('placeholder' => 'Post Title', 'class' => 'form-control')) }}
			{{ $errors->first('title', '<span class="help-block">:message</span><br>') }}
			<br>
			</div>
			<div class="form-group">
			{{ Form::file('image') }}
			<br>
			</div>
			<div class="form-group">
			{{ $errors->first('body', '<span class="help-block">:message</span><br>') }}
			<br>
			<div class="wmd-panel">
			    <div id="wmd-button-bar"></div>
					{{ Form::textarea('body', Input::old('body'), array('class' => 'form-control wmp-input', 'id' => 'wmd-input', 'placeholder' => 'Post Body')) }}
					<br>	
			</div>
			</div>
			<div class="form-group">
				{{ Form::submit('Submit', array('class' => 'btn')) }}
			</div>
		{{ Form::close() }}    			
		</div>
	</div><!-- /row -->
	
</div>

<!-- +++++ Footer Section +++++ -->
    
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h4>My Casa</h4>
                    <p>
                        1738 W Ashby Place<br/>
                        San Antonio, TX 78201 <br/>
                        210.286.0717
                    </p>
                </div><!-- /col-lg-4 -->
                
                <div class="col-lg-4">
                    <h4>My Links</h4>
                    <table class='table-mod-condensed'>
                        <tr>
                            <td><a href="http://www.linkedin.com/pub/michael-jaime/6/5b9/263/"><i class="fa fa-linkedin fa-2x"></i></a></td>
                            <td><a href="https://github.com/mikejaime"><i class="fa fa-github-alt fa-2x"></i></a></td>
                            <td><a href="http://www.facebook.com/michael.jaime"><i class="fa fa-facebook fa-2x"></i></a></td>
                            <td><a href="https://twitter.com/mikejaime2"><i class="fa fa-twitter fa-2x"></i></a></td>
                        </tr>
                    </table>
                </div><!-- /col-lg-4 -->
                
                <div class="col-lg-4">
                    <h4>Affiliations</h4>
                    <p>
                        <a href="#">Codeup</a><br/>
                        <a href="#">Geekdom</a>
                    </p>
                </div><!-- /col-lg-4 -->
            
            </div>
        
        </div>
    </div>
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.js"></script>
    
    <script src="/js/stanley-hover.zoom.js"></script>
    <script src="/js/stanley-hover.zoom.conf.js"></script>
    <script>
    	var converter = Markdown.getSanitizingConverter();
        
        var editor = new Markdown.Editor(converter);
        
        editor.run();
	</script>
    <script>
        $('#fade_message').delay(2000).fadeOut(1000);
    </script>
</body>
</html>