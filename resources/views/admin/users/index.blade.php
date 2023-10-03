@extends("layouts.admin")

@section("title", $title)

@push("css")
	<link rel="stylesheet" href="{{ asset("assets/css/users.css") }}">
@endpush

@section("body")
	<h1>{{ $title }}</h1>
	
	@forelse($users as $id => $user)
		<p><a href="{{ route("user", $id) }}">{{ $user[0] }}</a></p>
	@empty
		<p>Nenhum usuário cadastrado</p>
	@endforelse
@endsection