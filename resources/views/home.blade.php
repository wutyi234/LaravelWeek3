@extends("layout")

@section("content")
	<div class="container">
		<h2>Home Page</h2>
		<a href="/receipe/create"><button class="btn btn-success">Create</button></a>
    	@foreach($data as $value)
		<a href="/receipe/{{ $value->id }}"><li>Name - {{ $value->name }}</li></a>
    	<li>Ingredients - {{ $value->ingredients }}</li>
    	<li>Category - {{ $value->category }}</li>
    	<hr>
    	@endforeach
	</div>
@endsection