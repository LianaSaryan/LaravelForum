@extends('layout')

@section('content')

	<h1 class="title">Edit Post</h1>

	<form method="POST" action="/posts/{{ $post->id }}" style="margin-bottom: 1em;">
		@method('PATCH')
		@csrf
		<div class="form-group">

				 <label class="label" for="title">Title</label>

				 <div class="control">

				    <input type="text" class="input, form-control" name="title" placeholder="Title" value="{{ $post->title }}" required>

				  </div>
				
			</div>

			<div class="form-group">

				 <label class="label" for="body">Body</label>

				 <div class="control">

				    <textarea name="body" class="textarea, form-control" required>{{$post->body}}</textarea>

				  </div>
				
			</div>

			<div class="form-group">

				 <div class="control">

				 	  <button type="submit" class="btn btn-primary">Update Post</button>

				 </div>

			</div>
	</form>

	<form method="POST" action="/posts/{{ $post->id }}">

		@method('DELETE')
		@csrf

		<div class="field">

			 <div class="control">

			 	  <button type="submit" class="btn btn-danger">Delete Post</button>

			 </div>

		</div>

	</form>

@endsection