@extends('main')

@section('title', '404 | OWM')

@section('content')

@include('partials.messages')

<div class="container">
	<div class="row justify-content-center">
		<div class='col-md-8 text-center'>
			<h1 class="display-1">404</h1>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-md-6 text-center">
			<p>Page could not be found</p>
		</div>
	</div>
</div>

@endsection