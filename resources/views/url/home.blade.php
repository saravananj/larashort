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
			<h1 class="display-2">Shorten your URL!</h1>
			
		</div>
		
		<form id="larashortForm">
			<div class="form-group row">
				<div class="input-group col-md-12">
					<input type="text" class="form-control" id="inputURL" placeholder="Enter your loooong URL to be shrtnd">
					<input type="hidden" name="_token" id="inputToken" value="{{ csrf_token() }}">
					<span class="input-group-btn">
						<input type="submit" class="btn btn-primary" value="Shorten URL!"/>
					</span>
				</div>
			</div>
		</form>
		
		<br/><br/>

		@if(Auth::guest())
			<div class="alert alert-info" role="alert">
				<a href="javascript:void(0);" data-toggle="modal" data-target="#loginModal">Login</a> or <a href="{{ url('register') }}">Signup</a> to track the links and access to the usage analytics
			</div>
		@endif

		<div class="alert alert-success" role="alert" id="larashortSuccess" >
		</div>
		
		<div class="alert alert-danger" role="alert" id="larashortError">
		</div>
		
		<br/><br/>
		
		<table class="table table-striped text-center">
			<thead class="table-inverse">
				<tr>
					<th colspan="3">Your recent shortened URLs</th>
				</tr>
			</thead>
			<tbody>
			@if(Auth::guest())
				<tr>
					<td colspan="3">
						<a href="javascript:void(0);" data-toggle="modal" data-target="#loginModal">Login</a> or <a href="{{ url('register') }}">Signup</a> to view your recent links
					</td>
				</tr>
			@endif
			</tbody>
		</table>
		
	</div>
</div>

@stop