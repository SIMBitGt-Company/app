@extends('layouts.app')
@section('scripts')
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
	<script type="text/javascript" src="{{ asset('js/change.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/calls_controllers.js') }}"></script>
@endsection
@section('content')
<!-- Orders -->
	@include('orders.register')
	@include('orders.search')
	@include('orders.show')
<!-- Accesories -->
	@include('accesories.register')
	@include('accesories.search')
<!-- Cars -->
	@include('cars.orders')
	@include('cars.register')
	@include('cars.register_brand')
	@include('cars.search')
<!-- Items -->
	@include('items.register')
	@include('items.search')

<!-- Show -->
	@include('show.myorders')
<!-- Users -->
	@include('users.register')
	@include('users.orders')
	@include('users.search')

@endsection
