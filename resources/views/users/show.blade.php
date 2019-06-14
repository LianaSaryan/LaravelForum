@extends('layout')

@section('content')
	
	<div class="container">
		<h1> User Information</h1>
		
		<div class="well">
			<h3>Username: {{ $user->username }}</h3><br>

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

		</div>

		@if(auth()->user()->id !== $user-> id)
		<div class="container">
			<h3>Set Role</h3><br>
			<div class="well">
				<form method="POST" action="/users/edit/setRole/{{ $user->id }}">

					@method('PATCH')
					@csrf

					<label class="checkbox" for="isAdmin">

					  	<input type="checkbox" name="isAdmin" onChange="this.form.submit()" {{$user->isAdmin ? 'checked' : ''}}>
					  		Admin 
					</label><br>

				</form>

				<form method="POST" action="/users/edit/setRole/{{ $user->id }}">

					@method('PATCH')
					@csrf

					<label class="checkbox" for="normalUser">

					  	<input type="checkbox" name="normalUser" onChange="this.form.submit()" {{$user->isAdmin ? '' : 'checked'}}>
					  		Normal User 
					</label><br>

			</form>
			</div>
		</div>

		<div class="container">
					<form method="POST" action="/users/{{ $user->id }}">


					@method('DELETE')
					@csrf

					<div class="field">

						 <div class="control">

						 	  <button type="submit" class="btn btn-danger">Delete User Account</button>

					</div>

			</div>

		</div>

		@endif

	</div>

@endsection