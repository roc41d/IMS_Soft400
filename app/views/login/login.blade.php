@extends('layout')

@section('title')
	<title>LogIn - IMS_Soft400</title>
@stop

@section('button')
	<li class="active">{{ HTML::link('/register/signup', 'SIGN UP', array('class' => 'btn'))}}</li>
@stop

@section('content')
	
	<ol class="breadcrumb">
			<li>{{ HTML::link('/', 'Home') }}</li>
			<li class="active">User access</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Sign in</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Sign in to your account</h3>
							<hr>

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
							{{ Form::open(array('url' => '/back_end/userDashboard')) }}
								<div class="top-margin">
									<label>Username/Email <span class="text-danger">*</span></label>
									{{ Form::text('email', Input::old('email'), array('placeholder'=>'e.g. example@domain.com',
									 'class' => 'form-control')) }}
								</div>
								<div class="top-margin">
									<label>Password <span class="text-danger">*</span></label>
									{{ Form::password('password', array('placeholder'=>'Valid Password',
									 'class' => 'form-control')) }}
								</div>

								<hr>

								<div class="row">
									<div class="col-lg-8">
										<b>{{ HTML::link('/password/remind', 'Forgot Password?') }}</b>
									</div>
									<div class="col-lg-4 text-right">
										{{ Form::submit('Sign In', array('class' => 'btn btn-action')) }}
									</div>
								</div>
							{{ Form::close() }}
						</div>
					</div>

				</div>
				
			</article>
			<!-- /Article for the page-->

		</div>

@stop