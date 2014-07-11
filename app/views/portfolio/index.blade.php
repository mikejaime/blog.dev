@extends('layouts.master')

@section('content')

<!-- +++++ Welcome Section +++++ -->
<div id="ww">
    <div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 centered">
				<img src="/img/user.png" alt="Stanley">
				<h1>Hi, I am Mike!</h1>
				<p>Hello everybody. I'm Mike, a driven, passionate, and aspiring front-end developer guru!</p>
				<p>For now I'm a fresh freelance full-stack web developer and designer. Currently, I'm interested in joining
				a dev shop that will allow me to hone and expand my skill-set.</p>
			
			</div><!-- /col-lg-8 -->
		</div><!-- /row -->
    </div> <!-- /container -->
</div><!-- /ww -->


<!-- +++++ Projects Section +++++ -->

<div class="container pt">
	<div class="row mt centered">	
		<div class="col-lg-4">
			<a class="zoom green" href="work01.html"><img class="img-responsive" src="/img/portfolio/port-entform-logo.jpg" alt="" /></a>
			<p>APE</p>
		</div>
		<div class="col-lg-4">
			<a class="zoom green" href="work01.html"><img class="img-responsive" src="/img/portfolio/port02.jpg" alt="" /></a>
			<p>RAIDERS</p>
		</div>
		<div class="col-lg-4">
			<a class="zoom green" href="work01.html"><img class="img-responsive" src="/img/portfolio/port03.jpg" alt="" /></a>
			<p>VIKINGS</p>
		</div>
	</div><!-- /row -->
	<div class="row mt centered">	
		<div class="col-lg-4">
			<a class="zoom green" href="work01.html"><img class="img-responsive" src="/img/portfolio/port04.jpg" alt="" /></a>
			<p>YODA</p>
		</div>
		<div class="col-lg-4">
			<a class="zoom green" href="work01.html"><img class="img-responsive" src="/img/portfolio/port05.jpg" alt="" /></a>
			<p>EMPERORS</p>
		</div>
		<div class="col-lg-4">
			<a class="zoom green" href="work01.html"><img class="img-responsive" src="/img/portfolio/port06.jpg" alt="" /></a>
			<p>CHIEFS</p>
		</div>
	</div><!-- /row -->
</div><!-- /container -->

@stop