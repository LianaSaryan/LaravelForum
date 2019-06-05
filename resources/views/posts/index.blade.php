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

		@if(auth()->user()->isAdmin == 1)
			<form method="POST" action="/posts/{{ $post->id }}">

			@method('DELETE')
			@csrf

			<div class="field">

				 <div class="control">

				 	  <button type="submit" class="button">Delete Post</button>

				 </div>

			</div>
			</form>
		@endif
		
	</div>	
	@endforeach

	<p>
		<a href="/posts/create">Create Post</a>
	</p>
@endsection