<!-- This layout is extended from the layout blade template -->

@extends('layout')

@section('title')
	<title>Sign up - IMS_Soft400</title>
@stop

@section('button')
	<li class="active">{{ HTML::link('/login/login', 'SIGN IN', array('class' => 'btn'))}}</a></li>
@stop

<!-- This is the section that act as the content -->
@section('content')
<ol class="breadcrumb">
			<li>{{ HTML::link('/', 'Home') }}</li>
			<li class="active">Registration</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Registration</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">

							@if ($errors->any())
							 
							<ul style="color:red;">
							 
							{{ implode('', $errors->all('<li>:message</li>')) }}
							 
							</ul>
							 
							@endif

							@if(Session::has('success'))
							    <div class="alert alert-success">
							        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							    <strong>Account Created Successfully!</strong> {{ Session::get('message', '') }}
							    </div>
							@endif

							{{ Form::open(array('url' => '/register/register_action', 'method' => 'post')) }}
								<div class="top-margin">
									<label>First Name</label>
									{{ Form::text('fname', Input::old('fname'), array('placeholder'=>'First Name',
									 'class' => 'form-control')) }}
								</div>
								<div class="top-margin">
									<label>Last Name</label>
									{{ Form::text('lname', Input::old('lname'), array('placeholder'=>'Last Name',
									 'class' => 'form-control')) }}
								</div>
								<div class="top-margin">
									<label>Email Address <span class="text-danger">*</span></label>
									{{ Form::text('email', Input::old('email'), array('placeholder'=>'e.g. example@domain.com',
									 'class' => 'form-control')) }}
								</div>

								<div class="row top-margin">
									<div class="col-sm-6">
										<label>Password <span class="text-danger">*</span></label>
										{{ Form::password('password', array('placeholder'=>'Password',
									 'class' => 'form-control')) }}
									</div>
									<div class="col-sm-6">
										<label>Confirm Password <span class="text-danger">*</span></label>
										{{ Form::password('cpassword', array('placeholder'=>'Confirm Password',
									 'class' => 'form-control')) }}
									</div>
								</div>

								<hr>

								<div class="row">
									<div class="col-lg-8">
										<label class="checkbox">
											<input type="checkbox"> 
											I've read the <a href="page_terms.html">Terms and Conditions</a>
										</label>                        
									</div>
									<div class="col-lg-4 text-right">
										{{ Form::submit('Submit', array('class' => 'btn btn-action')) }}
									</div>
								</div>
							{{ Form::close() }}
						</div>
					</div>

				</div>
				
			</article>
			<!-- /Article -->

		</div>
@stop