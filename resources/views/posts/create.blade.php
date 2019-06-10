@extends('layout')

@section('content')

<div class="container">
	
	<h1 class="title">Create a New Post</h1>

		<form method="POST" action="/posts">

			{{ csrf_field() }}

			<div class="form-group">

				 <label class="label" for="title">Post Title</label>

				 <div class = "control">

				    <input type="text" class="input {{ $errors->has('title') ? 'is-danger' : '' }}, form-control"  name="title" value="{{ old('title') }}" required>

				  </div>
				
			</div>

			<div class="form-group">

				 <label class="label" for="body">Post Body</label>

				 <div class="control">

				    <textarea name="body" class="textarea {{ $errors->has('body') ? 'is-danger' : '' }} , form-control" required>{{ old('description') }}</textarea>

				  </div>
				
			</div>


			<div class="form-group">

				 <div class="control">

				 	  <button type="submit" class="btn btn-primary">Create Post</button>

				 </div>

			</div>

			@include('errors')

		</form>
	</div>
@endsection