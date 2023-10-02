@extends("layouts.master")

@section("title", $title)

@section("body")
	<h1>{{ $title }}</h1>
	
	<a href="{{ route("users") }}">Voltar</a>
	
	<p>{{ $user[0] }} | {{ $user[1] }}</p>
@endsection