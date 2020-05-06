@extends("layout")

@section("content")
    <h2>JS Page</h2>
    @foreach($data as $value)
    	<li>{{ $value }}</li>
    @endforeach
@endsection