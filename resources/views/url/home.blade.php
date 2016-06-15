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
		
		<div class="alert alert-success" role="alert" id="larashortSuccess">
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
				<tr>
					<td colspan="3">You have no recent items</td>
				</tr>
			</tbody>
		</table>
		
	</div>
</div>

@stop