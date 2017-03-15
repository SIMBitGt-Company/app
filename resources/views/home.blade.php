@extends('layouts.app')
@section('scripts')
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
	<script type="text/javascript" src="{{ asset('js/change.js') }}"></script>
@endsection
@section('content')
	@include('cars.register_brand')
	@include('users.register')
	@include('cars.register')
@endsection


