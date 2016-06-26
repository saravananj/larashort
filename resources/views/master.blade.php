{{-- ========================================================================
 * LaraShort v0.1
 * Copyright 2016 Saravanan Jayabalan (http://www.saravananj.com)
 * Licensed under MIT (https://github.com/saravananj/larashort/blob/master/LICENSE)
 * ======================================================================== --}}
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>LaraShort</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="ShortURL application developed with Laravel">
		<meta name="keywords" content="ShortURL, Laravel, Larashort, URL Shortner, Shortner, URL">
		<meta name="author" content="Saravanan Jayabalan [saravananj.com]">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" type='text/css' href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css">
		<link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic'>
		<link rel='stylesheet' type='text/css' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>
		<link rel='stylesheet' type='text/css' href="{{ URL::asset('assets/css/larashort.css') }}">
		
	</head>
	<body>
		<div class="container">
			<nav class="navbar navbar-light bg-faded">
				<a class="navbar-brand" href="{{ url('/') }}">LaraShort</a>
				<div class="pull-right">
					<ul class="nav navbar-nav">
						<li class="nav-item">
							<form class="form-inline">
								<input class="form-control" type="text" placeholder="Search">
								<button class="btn btn-success-outline" type="submit">Search</button>
							</form>
						</li>
						@if(Auth::check())
							<li class="nav-item navbarIcon" title="My Account">
								<i class="fa fa-user" aria-hidden="true"></i>
							</li>
							<li class="nav-item navbarIcon" title="Logout">
								<a href="{{ url('logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
							</li>
						@else
							<li class="nav-item navbarIcon" title="Login / Sign Up"  data-toggle="modal" data-target="#loginModal">
								<i class="fa fa-user" aria-hidden="true"></i>
							</li>
						@endif
					</ul>
				</div>
			</nav>
			@yield('content')
			
			<footer>
				<div class="row">
					<div class="col-md-6">
						Powered by <a href="http://saravananj.com/larashort">LaraShort</a>
					</div>
					<div class="col-md-6 text-right">
						Developed by <a href="http://saravananj.com">Saravanan Jayabalan</a>
					</div>
			</footer>
		</div>

		@include('partials.loginmodal')
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script>
		<script src="{{ URL::asset('assets/js/larashort.js') }}"></script>
	</body>
</html>