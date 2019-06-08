@extends('layout')

@section('content')

	<h1>Posts</h1>

	<div class="container">

	@foreach ($posts as $post)
	<div class = "well">
		<a href="/posts/{{ $post-> id }}">
			<h2>{{ $post-> title }}</h2>
		</a>
		<small>{{ $post-> updated_at}}</small><br>
		<br>{{ $post-> body }}

		@if(auth()->user()->isAdmin == 1)
			<form method="POST" action="/posts/{{ $post->id }}">

			@method('DELETE')
			@csrf

			<div class="field">

				 <div class="control">

				 	  <button type="submit" class="btn btn-danger btn pull-right">Delete Post</button>

				 </div>

			</div>
			</form>
		@endif
		
	</div>	
	@endforeach

	</div>
	<p>
		<a href="/posts/create" class="btn btn-primary">Create Post</a>
	</p>
@endsection