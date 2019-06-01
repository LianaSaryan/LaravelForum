@extends('layout')

@section('content')

	<h1 class="title">Posts</h1>

	@foreach ($posts as $post)

		<li>{{ $post-> title }}</li>

	@endforeach

@endsection