{{-- ========================================================================
 * LaraShort v0.1
 * Copyright 2016 Saravanan Jayabalan (http://www.saravananj.com)
 * Licensed under MIT (https://github.com/saravananj/larashort/blob/master/LICENSE)
 * ======================================================================== --}}
@extends('master')

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="titleBanner text-center">
			<h1 class="display-4">404</h1>
			
			<h1>The link you are looking for is either broken or expired!</h1>
			
			<a href="{{ url('/') }}" class="btn btn-primary">Go to Home</a>
			
		</div>
	</div>
</div>

@stop