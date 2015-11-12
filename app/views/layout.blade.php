<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	@yield('title')
	

	<link rel="shortcut icon" href="{{ asset('images/gt_favicon.png') }}">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap-theme.css') }}" media="screen" >
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('js/dataTables/dataTables.bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('js/morris/morris-0.4.3.min.css') }}">
	

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.html"><img src="{{ asset('images/logo.png') }}" id="logo" alt="Progressus HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Features <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Inventory Managemetn</a></li>
							<li><a href="#">Customer Account</a></li>
							<li><a href="#">Financial Reports</a></li>
							<li><a href="#">Author's Support</a></li>
						</ul>
					</li>
					<li><a href="contact.html">Contact</a></li>
					@yield('button')
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		@yield('content')

	</div>	<!-- /container -->
	

	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p>+237 678010978<br>
							<p>+237 651276262<br>
							<p>+237 678509550<br>
							<p>+237 671465706<br>
								<a href="mailto:#">ims_soft400@gmail.com</a><br>
								<br>
								Faculty of Engineering, University of Buea
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Follow me</h3>
						<div class="widget-body">
							<p class="follow-me-icons clearfix">
								<a href=""><i class="fa fa-twitter fa-2"></i></a>
								<a href=""><i class="fa fa-dribbble fa-2"></i></a>
								<a href=""><i class="fa fa-github fa-2"></i></a>
								<a href=""><i class="fa fa-facebook fa-2"></i></a>
							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">About Online Inventory Management</h3>
						<div class="widget-body">
							<p>Our Sales, Success, and Support Teams are there for every stage of your onboarding onto T
							radeGecko. Once you start your trial, an Account Manager will call to establish how we can 
							meet your specific needs and get you started on using our inventory management software. 
							We are also ready for any question 
							you might have, and have prepared plenty of tutorials in our Help Center. </p>
							<p>So you get more than just inventory management software and support, you 
							gain access to lots of valuable resources on how to better manage your 
							inventory and improve your wholesale business – now that’s what we call value adding.</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								{{ HTML::link('/', 'Home') }} | 
								<a href="about.html">About</a> |
								<a href="#">Contact</a>
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2014, Design by MIRD Team
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>
	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="{{ asset('js/headroom.min.js') }}"></script>
	<script src="{{ asset('js/jQuery.headroom.min.js') }}"></script>
	<script src="{{ asset('js/template.js') }}"></script>
	<script src="{{ asset('js/dataTables/jquery.dataTables.js') }}"></script>
	<script src="{{ asset('js/dataTables/dataTables.bootstrap.js') }}"></script>
</body>
</html>