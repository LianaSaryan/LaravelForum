@extends('layout')

@section('content')
	
	<h1 class="title"> User Information</h1>
	
	<h1 class="User">Username: {{ $user->username }}</h1><br>

	<div class = "container">

			<h3>First Name: {{ $user-> first_name}}</h3><br>

			<h3>Last Name: {{ $user-> last_name}}</h3><br>

			<!-- <h3>Username: {{ $user-> username}}</h3><br> -->

			<h3>Email: {{ $user-> email}}</h3><br>

			<h3>Biography: {{ $user-> biography }}</h3><br>

			@if( $user->isAdmin == 1)

				<h3>Role: Admin</h3><br>

			@endif

			@if( $user->isAdmin == 0)

				<h3>Role: Normal User</h3><br>
				
			@endif
		</a>

@endsection