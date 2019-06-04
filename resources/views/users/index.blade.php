@extends('layout')

@section('content')

	<h1 class="title">My Profile</h1>

	<div class = "container">
			<h3>First Name: {{ $user-> first_name}}</h3><br>

			<h3>Last Name: {{ $user-> last_name}}</h3><br>

			<h3>Username: {{ $user-> username}}</h3><br>

			<h3>Email: {{ $user-> email}}</h3><br>

			<h3>Biography: {{ $user-> biography }}</h3><br>

		</a>

	<p>
		<a href="/users/{{ $user->id }}/edit">Edit</a>
	</p>

	</div>	
@endsection