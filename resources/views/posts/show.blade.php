@extends('layout')

@section('content')
	
	<h1 class="title">{{ $post->title }}</h1>

	<div class="content">{{ $post->body }}</div>

	@if($post -> owner_id == auth()->id())
		<p>
			<a href="/posts/{{ $post->id }}/edit">Edit</a>
		</p>
	@endif

	<br><h3>Comments</h3><br>
	@if ($post->comments->count())
		<div>	
			@foreach($post->comments as $comment)
			<div>
				<form method="POST" action="/comments/{{ $comment->id }}">

					@method('DELETE')
					@csrf

					<div class="field">

						 <div class="control">

						 	 <div class="content">{{ $comment->body }}</div>
						 	 	@if($comment -> owner_id == auth()->id())
									<button type="submit" class="button">Delete</button>

								@endif
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