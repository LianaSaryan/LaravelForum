@extends('layout')

@section('content')

	<h1 class="title">Users</h1>

	@foreach ($users as $user)
	<div class = "container">
		<a href="/users/{{ $user-> id }}"><br>
			<h3>{{ $user-> username }}</h3>
		</a>
	</div>	
	@endforeach
<!-- 
	<p>
		<a href="/posts/create">Create Post</a>
	</p> -->
@endsection