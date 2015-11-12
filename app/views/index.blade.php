<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Home | Inventory Management System</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	<link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" media="screen, projection">
	<link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet" media="screen, projection">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">

	<!-- Custom styles for our template -->
	<link href="{{ asset('css/bootstrap-theme.css')}}" rel="stylesheet" media="screen, projection">
	<link href="{{ asset('css/main.css')}}" rel="stylesheet" media="screen, projection">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body class="home">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.html"><img src="{{ asset('images/logo.png') }}" id="logo" alt="IMS Logo"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active">{{ HTML::link('/', 'Home') }}</li>
					<li><li>{{ HTML::link('/about', 'About') }}</li></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Features <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Inventory Management</a></li>
							<li><a href="#">Customer Account</a></li>
							<li><a href="#">Financial Reports</a></li>
							<li><a href="#">Author's Support</a></li>
						</ul>
					</li>
					<li>{{ HTML::link('/contact', 'Contact') }}</li>
					<li>{{ HTML::link('/register/signup', 'SIGN IN / SIGN UP', array('class' => 'btn')) }}</li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<!-- Header -->
	<header id="head">
		<div class="container">
			<div class="row">
				<h1 class="lead">AWESOME ONLINE INVENTORY MANAGEMENT SYSTEM</h1>
				<p class="tagline">The Inventory Management System of Successful Merchants</p>
				
			</div>
		</div>
	</header>
	<!-- /Header -->

	<!-- Intro -->
	@if(Session::has('alertMessage'))
         <span class="badge alert-success"><strong>Session::get('alertMessage')</strong></span>
     @endif 
	<div class="container text-center">
		<br> <br>
		<h2 class="thin">The best place manage your inventory</h2>
		<p class="text-muted">
			An easier way for managing your business. SalesBinder is an all-in-one online 
			inventory management system that also organizes your customers, sales leads, purchase orders, 
			estimates and invoices
		</p>
	</div>
	<!-- /Intro-->
		
	<!-- Highlights - jumbotron -->
	<div class="jumbotron top-space">
		<div class="container">
			
			<h3 class="text-center thin">Reasons to use our Online IMS</h3>
			
			<div class="row">
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><img src="{{ asset('images/activity.png') }}" alt="thataway" />Inventory Management</h4></div>
					<div class="h-body text-center">
						<p>Manage your inventory and check supply levels in real-time. 
						Receive low inventory notifications and generate Purchase 
						Orders to replenish your stock.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><img src="{{ asset('images/accounts.png') }}" alt="thataway" />Customer Accounts</h4></div>
					<div class="h-body text-center">
						<p>With a built-in CRM you can keep track of all your customer accounts with ease. 
						Add multiple contacts, private notes, and review their purchase history. </p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><img src="{{ asset('images/reports.png') }}" alt="thataway" />Financial Reports</h4></div>
					<div class="h-body text-center">
						<p>Generate extremely detailed financial reports for both your inventory and services. 
						Filter your reports by date-range and category to see what's making you the most money.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><img src="{{ asset('images/billing.png') }}" alt="thataway" />Invoice & Estimate</h4></div>
					<div class="h-body text-center">
						<p> Create beautiful, professional invoices & estimates in just a few seconds and 
						then instantly email them as PDF's directly to your customers or prospects.</p>
					</div>
				</div>
			</div> <!-- /row  -->
		
		</div>
	</div>
	<!-- /Highlights -->

	<!-- container -->
	<div class="container">

		<h2 class="text-center top-space">Frequently Asked Questions</h2>
		<br>

		<div class="row">
			<div class="col-sm-4">
				<h3>What is an Online Inventory Management System?</h3>
				<p>I'd highly recommend you <a href="http://www.sublimetext.com/">Sublime Text</a> - a free to try text editor which I'm using daily. Awesome tool!</p>
			</div>
			<div class="col-sm-4">
				<h3>Why Inventory Management?</h3>
				<p>
				The <em><b>Inventory Management System</b></em> is a real-time inventory database capable of
				connecting multiple stores. This can be used to track the inventory of a single store, or to
				manage the distribution of stock between several branches of a larger franchise.
				</p>
			</div>
			<div class="col-sm-4">
				<h3>Nice header. Where do I find more images like that one?</h3>
				<p>
					Well, there are thousands of stock art galleries, but personally, 
					I prefer to use photos from these sites: <a href="http://unsplash.com">Unsplash.com</a> 
					and <a href="http://www.flickr.com/creativecommons/by-2.0/tags/">Flickr - Creative Commons</a></p>
			</div>
		</div> <!-- /row -->

		<div class="row">
			<div class="col-sm-6">
				<h3>Can I use it to build a site for my client?</h3>
				<p>
					Yes, you can. You may use this template for any purpose, just don't forget about the <a href="http://creativecommons.org/licenses/by/3.0/">license</a>, 
					which says: "You must give appropriate credit", i.e. you must provide the name of the creator and a link to the original template in your work. 
				</p>
			</div>
			<div class="col-sm-6">
				<h3>Can you customize this template for me?</h3>
				<p>Yes, I can. Please drop me a line to sergey-at-pozhilov.com and describe your needs in details. Please note, my services are not cheap.</p>
			</div>
		</div> <!-- /row -->

		<div class="jumbotron top-space">
			<h4>IMS SOFT400 is Software Engineering project given to us Level 400 Student in the University 
			of Buea to defend it for the complition of one of our courses(CEF415: Technical Writing). As a result 
			we should be able to Build an online Inventory management system for both our University and our country 
			Cameroon.</h4>
     		<p class="text-right"><a class="btn btn-primary btn-large">Learn more »</a></p>
  		</div>

</div>	<!-- /container -->
	
	<!-- Social links. @TODO: replace by link/instructions in template -->
	<section id="social">
		<div class="container">
			<div class="wrapper clearfix">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_linkedin_counter"></a>
				<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</div>
				<!-- AddThis Button END -->
			</div>
		</div>
	</section>
	<!-- /social links -->


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
	<link href="{{ asset('js/headroom.min.js')}}" rel="stylesheet" media="screen, projection">
	<link href="{{ asset('js/jQuery.headroom.min.js')}}" rel="stylesheet" media="screen, projection">
	<link href="{{ asset('js/template.js')}}" rel="stylesheet" media="screen, projection">
</body>
</html>