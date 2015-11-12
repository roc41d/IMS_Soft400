<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    @yield('title')

    <!-- Custom styles for our template -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.css') }}" media="screen" >
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">

	<!-- BOOTSTRAP STYLES-->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="{{ asset('assets/js/morris/morris-0.4.3.min.css') }}" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href="{{ asset('http://fonts.googleapis.com/css?family=Open+Sans:300,400,700') }}" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                {{ HTML::link('/back_end/user', 'IMS Soft400', array('class' => 'navbar-brand'))}} 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">
@if(Auth::check())
    Welcome, <b style="font-size: 20px;">{{ Auth::user()->email }}!</b> &nbsp;&nbsp;&nbsp;
      {{ HTML::link('/logout', 'Logout', array('class' => 'btn btn-info'))}}
@else
{{ HTML::link('/login/login', 'LogIn', array('class' => 'btn btn-info'))}} </div>
@endif
        </nav> 

        @yield('content')

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

    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="{{ asset('assets/js/jquery-1.10.2.js') }}"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="{{ asset('assets/js/jquery.metisMenu.js') }}"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="{{ asset('assets/js/morris/raphael-2.1.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/morris/morris.js') }}"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>  