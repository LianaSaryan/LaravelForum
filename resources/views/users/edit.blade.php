@extends('layout')

@section('content')
	<h1 class="title">Edit User Information</h1>

	<form method="POST" action="/users/{{ $user->id }}" style="margin-bottom: 1em;">
		@method('PATCH')
		@csrf
		<div class="container">

				 <label class="label" for="username">Username</label>

				 <div class="control">

				    <input type="text" class="input" name="username" placeholder="Username" value="{{ $user->username }}" >

				  </div>
				
			</div>

			<div class="field">

				 <label class="label" for="biography">Biography</label>

				 <div class="control">

				    <textarea name="biography" class="textarea">{{$user->biography}}</textarea>

				  </div>
				
			</div>

			<div class="field">

				 <div class="control">

				 	  <button type="submit" class="button is-link">Update Profile</button>

				 </div>

			</div>

		@include('errors')
		
	</form>

@endsection