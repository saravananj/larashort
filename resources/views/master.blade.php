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
				<a class="navbar-brand" href="#">LaraShort</a>
				<div class="pull-right">
					<ul class="nav navbar-nav">
						<li class="nav-item">
							<form class="form-inline">
								<input class="form-control" type="text" placeholder="Search">
								<button class="btn btn-success-outline" type="submit">Search</button>
							</form>
						</li>
						<li class="nav-item navbarIcon" title="My Account">
							<i class="fa fa-user" aria-hidden="true"></i>
						</li>
						<li class="nav-item navbarIcon" title="Logout">
							<i class="fa fa-sign-out" aria-hidden="true"></i>
						</li>
					</ul>
				</div>
			</nav>
			@yield('content')
		</div>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
		<script src="{{ URL::asset('assets/js/larashort.js') }}"></script>
	</body>
</html>