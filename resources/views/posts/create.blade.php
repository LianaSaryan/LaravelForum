@extends('layout')

@section('content')
	<h1 class="title">Create a New Post</h1>

	<form method="POST" action="/posts">

		{{ csrf_field() }}

		<div class="field">

			 <label class="label" for="title">Post Title</label>

			 <div class="control">

			    <input type="text" class="input {{ $errors->has('title') ? 'is-danger' : '' }}"  name="title" value="{{ old('title') }}" required>

			  </div>
			
		</div>

		<div class="field">

			 <label class="label" for="body">Post Body</label>

			 <div class="control">

			    <textarea name="body" class="textarea {{ $errors->has('body') ? 'is-danger' : '' }}" required>{{ old('description') }}</textarea>

			  </div>
			
		</div>


		<div class="field">

			 <div class="control">

			 	  <button type="submit" class="button is-link">Create Post</button>

			 </div>

		</div>

		@include('errors')

	</form>

@endsection