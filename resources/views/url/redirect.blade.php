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
			
		<style>
			.cssload-container *, .cssload-container *:before, .cssload-container *:after{
				box-sizing: border-box;
				-o-box-sizing: border-box;
				-ms-box-sizing: border-box;
				-webkit-box-sizing: border-box;
				-moz-box-sizing: border-box;
			}
			
			.cssload-container {
				margin: 42px auto;
				width: 51px;
				height: 25px;
			}
			.cssload-container > div {
				float: left;
				background: rgb(185,108,255);
				height: 100%;
				width: 4px;
				margin-right: 1px;
				display: inline-block;
			}
			
			.cssload-container .cssload-shaft1 {
				animation-delay: 0.06s;
					-o-animation-delay: 0.06s;
					-ms-animation-delay: 0.06s;
					-webkit-animation-delay: 0.06s;
					-moz-animation-delay: 0.06s;
			}
			.cssload-container .cssload-shaft2 {
				animation-delay: 0.12s;
					-o-animation-delay: 0.12s;
					-ms-animation-delay: 0.12s;
					-webkit-animation-delay: 0.12s;
					-moz-animation-delay: 0.12s;
			}
			.cssload-container .cssload-shaft3 {
				animation-delay: 0.17s;
					-o-animation-delay: 0.17s;
					-ms-animation-delay: 0.17s;
					-webkit-animation-delay: 0.17s;
					-moz-animation-delay: 0.17s;
			}
			.cssload-container .cssload-shaft4 {
				animation-delay: 0.23s;
					-o-animation-delay: 0.23s;
					-ms-animation-delay: 0.23s;
					-webkit-animation-delay: 0.23s;
					-moz-animation-delay: 0.23s;
			}
			.cssload-container .cssload-shaft5 {
				animation-delay: 0.29s;
					-o-animation-delay: 0.29s;
					-ms-animation-delay: 0.29s;
					-webkit-animation-delay: 0.29s;
					-moz-animation-delay: 0.29s;
			}
			.cssload-container .cssload-shaft6 {
				animation-delay: 0.35s;
					-o-animation-delay: 0.35s;
					-ms-animation-delay: 0.35s;
					-webkit-animation-delay: 0.35s;
					-moz-animation-delay: 0.35s;
			}
			.cssload-container .cssload-shaft7 {
				animation-delay: 0.4s;
					-o-animation-delay: 0.4s;
					-ms-animation-delay: 0.4s;
					-webkit-animation-delay: 0.4s;
					-moz-animation-delay: 0.4s;
			}
			.cssload-container .cssload-shaft8 {
				animation-delay: 0.46s;
					-o-animation-delay: 0.46s;
					-ms-animation-delay: 0.46s;
					-webkit-animation-delay: 0.46s;
					-moz-animation-delay: 0.46s;
			}
			.cssload-container .cssload-shaft9 {
				animation-delay: 0.52s;
					-o-animation-delay: 0.52s;
					-ms-animation-delay: 0.52s;
					-webkit-animation-delay: 0.52s;
					-moz-animation-delay: 0.52s;
			}
			.cssload-container .cssload-shaft10 {
				animation-delay: 0.58s;
					-o-animation-delay: 0.58s;
					-ms-animation-delay: 0.58s;
					-webkit-animation-delay: 0.58s;
					-moz-animation-delay: 0.58s;
			}
			
			.cssload-container > div {
				animation: cssload-jellyfish 1.73s infinite ease-in-out;
					-o-animation: cssload-jellyfish 1.73s infinite ease-in-out;
					-ms-animation: cssload-jellyfish 1.73s infinite ease-in-out;
					-webkit-animation: cssload-jellyfish 1.73s infinite ease-in-out;
					-moz-animation: cssload-jellyfish 1.73s infinite ease-in-out;
				transform: scaleY(0.05) translateX(-4px);
					-o-transform: scaleY(0.05) translateX(-4px);
					-ms-transform: scaleY(0.05) translateX(-4px);
					-webkit-transform: scaleY(0.05) translateX(-4px);
					-moz-transform: scaleY(0.05) translateX(-4px);
			}
			
			
			
			@keyframes cssload-jellyfish {
				10% {
					background: rgb(86,215,198);
				}
				15% {
					transform: scaleY(1.2) translateX(8px);
					background: rgb(86,215,198);
				}
				90%, 100% {
					transform: scaleY(0.05) translateX(-4px);
				}
			}
			
			@-o-keyframes cssload-jellyfish {
				10% {
					background: rgb(86,215,198);
				}
				15% {
					-o-transform: scaleY(1.2) translateX(8px);
					background: rgb(86,215,198);
				}
				90%, 100% {
					-o-transform: scaleY(0.05) translateX(-4px);
				}
			}
			
			@-ms-keyframes cssload-jellyfish {
				10% {
					background: rgb(86,215,198);
				}
				15% {
					-ms-transform: scaleY(1.2) translateX(8px);
					background: rgb(86,215,198);
				}
				90%, 100% {
					-ms-transform: scaleY(0.05) translateX(-4px);
				}
			}
			
			@-webkit-keyframes cssload-jellyfish {
				10% {
					background: rgb(86,215,198);
				}
				15% {
					-webkit-transform: scaleY(1.2) translateX(8px);
					background: rgb(86,215,198);
				}
				90%, 100% {
					-webkit-transform: scaleY(0.05) translateX(-4px);
				}
			}
			
			@-moz-keyframes cssload-jellyfish {
				10% {
					background: rgb(86,215,198);
				}
				15% {
					-moz-transform: scaleY(1.2) translateX(8px);
					background: rgb(86,215,198);
				}
				90%, 100% {
					-moz-transform: scaleY(0.05) translateX(-4px);
				}
			}
		</style>
		
	</head>
	<body>
		<div class="container">
			<nav class="navbar navbar-light bg-faded">
				<a class="navbar-brand" href="#">LaraShort</a>
			</nav>
			<br/><br/><br/>
			<div class="row">
				<div class="col-md-12 text-center">
					<h3>Please wait while we redirect</h3>
					<br/><br/>
					<div class="cssload-container">
						<div class="cssload-shaft1"></div>
						<div class="cssload-shaft2"></div>
						<div class="cssload-shaft3"></div>
						<div class="cssload-shaft4"></div>
						<div class="cssload-shaft5"></div>
						<div class="cssload-shaft6"></div>
						<div class="cssload-shaft7"></div>
						<div class="cssload-shaft8"></div>
						<div class="cssload-shaft9"></div>
						<div class="cssload-shaft10"></div>
					</div>
				</div>
			</div>
		</div>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){

				@if($settings["enable_ad"])
					setTimeout(function(){
						redirectPage();
					},{{ $settings["ad_display_time"] }}000);

				@else
					redirectPage();
				@endif
				
			});

			function redirectPage(){
				location.href="{{ $link["original_url"] }}";
			}
		</script>
	</body>
</html>