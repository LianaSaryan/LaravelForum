@extends('layout')

@section('content')

	<div class = "container">
	<h1>My Profile</h1>

		<div class="well"> 
			@if(auth()->user()->isAdmin == 1)

				<h2>Admin</h2><br>

			@endif

			<h3>First Name: {{ $user-> first_name}}</h3><br>

			<h3>Last Name: {{ $user-> last_name}}</h3><br>

			<h3>Username: {{ $user-> username}}</h3><br>

			<h3>Email: {{ $user-> email}}</h3><br>

			<h3>Biography: {{ $user-> biography }}</h3><br>

		</div>

		<p>
			<a href="/users/{{ $user->id }}/edit" class="btn btn-primary">Edit</a>
		</p>

	</div>	
@endsection