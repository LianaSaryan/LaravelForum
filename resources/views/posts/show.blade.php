@extends('layout')

@section('content')
	
	<h1 class="title">{{ $post->title }}</h1>

	<div class="content">{{ $post->body }}</div>

	<p>
		<a href="/posts/{{ $post->id }}/edit">Edit</a>
	</p>

	@if ($post->comments->count())
		<div>	
			<br><h3>Comments</h3><br>
			@foreach($post->comments as $comment)
			<div>
				<form method="POST" action="/comments/{{ $comment->id }}">

					@method('DELETE')
					@csrf

					<div class="field">

						 <div class="control">

						 	 <div class="content">{{ $comment->body }}</div>
						 	 <button type="submit" class="button">Delete</button>

						 </div>

					</div>

				</form>
			</div>
				
			@endforeach
		</div>
	@endif

	<!-- {add a new comment form} -->
	<br>
	<br>
	<form method = "POST" action="/posts/{{ $post->id }}/comments" class="box">
		@csrf

		<div class="field">

		  <div class="control">

		    <input class="input" type="text" name="body" placeholder="New Comment" required>
		 
		  </div>

		  <div class="control">

		    <button class="button is-link">Add Comment</button>

		  </div>

		</div>

		@include('errors')

	</form>

	
@endsection