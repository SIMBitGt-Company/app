@extends('layouts.app')
@section('scripts')
  @include('fine-uploader.script')
@endsection
@section('content')

<!-- Orders -->
	@include('orders.register')						<!--Forms with prefix OR -->
	@include('orders.search')							<!--Forms with prefix OS -->
	@include('orders.show')								<!--Forms with prefix OSh -->

<!-- Accesories -->
	@include('accesories.register')				<!--Forms with prefix AR -->
	@include('accesories.search')					<!--Forms with prefix AS -->

<!-- Cars -->
	@include('cars.orders')								<!--Forms with prefix CO -->
	@include('cars.register')							<!--Forms with prefix CR -->
	@include('cars.register_brand')				<!--Forms with prefix CRB -->
	@include('cars.search')								<!--Forms with prefix CS -->

<!-- Items -->
	@include('items.register')						<!--Forms with prefix IR -->
	@include('items.search')							<!--Forms with prefix IS -->

<!-- Show -->
	@include('show.myorders')							<!--Forms with prefix SM -->

<!-- Users -->
	@include('users.register')						<!--Forms with prefix UR -->
	@include('users.orders')							<!--Forms with prefix UO -->
	@include('users.search')							<!--Forms with prefix US -->

@endsection

@section('jquery')
<script type="text/javascript" src="{{ asset('js/change.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/calls_controllers.js') }}"></script>
@endsection
