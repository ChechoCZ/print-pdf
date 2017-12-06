@extends('layout.master')

@section('content')

	<div class="container">	

		<strong><p align="center">{{ $data['title'] }}</p></strong>
		<p>{{ $data['message'] }}</p>		

	</div>

@endsection