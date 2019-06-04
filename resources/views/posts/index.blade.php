@extends('layout')

@section('content')

	<h1 class="title">Posts</h1>

	@foreach ($posts as $post)
	<div class = "container">
		<a href="/posts/{{ $post-> id }}"><br>
			<h3>{{ $post-> title }}</h3>
		</a>
		<small><br>{{ $post-> updated_at}}</small>
		<br>{{ $post-> body }}
	</div>	
	@endforeach
@endsection