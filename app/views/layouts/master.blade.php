<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Michael Jaime</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/stanley-bootstrap.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="/css/stanley-main.css" rel="stylesheet">
</head>
<body>

    <!-- Static navbar -->
    <div class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index">MICHAEL JAIME</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="about">About</a></li>
            <li><a href="portfolio">Portfolio</a></li>
            <li><a href="resume">Resume</a></li>
            <li><a href="blog">Blog</a></li>
            <li><a href="contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

	
    @yield('content')


    <!-- +++++ Footer Section +++++ -->
    
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h4>My Bunker</h4>
                    <p>
                        1738 W Ashby Place<br/>
                        San Antonio, TX 78201 <br/>
                        210.286.0717
                    </p>
                </div><!-- /col-lg-4 -->
                
                <div class="col-lg-4">
                    <h4>My Links</h4>
                    <p>
                        <a href="#">Dribbble</a><br/>
                        <a href="#">Twitter</a><br/>
                        <a href="http://www.facebook.com/michael.jaime">Facebook</a>
                    </p>
                </div><!-- /col-lg-4 -->
                
                <div class="col-lg-4">
                    <h4>About Michael</h4>
                    <p>This cute theme was created to showcase your work in a simple way. Use it wisely.</p>
                </div><!-- /col-lg-4 -->
            
            </div>
        
        </div>
    </div>
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/bootstrap.js"></script>

    <script src="/js/jquery.js"></script>
    <script src="/js/stanley-hover.zoom.js"></script>
    <script src="/js/stanley-hover.zoom.conf.js"></script>
</body>
</html>