@extends('layout')

@section('content')
	<h1 class="title">Create a New Post</h1>

	<form method="POST" action="/posts">

		{{ csrf_field() }}

		<div>
			<input type="text" name="title" placeholder="Post title">
		</div>

		<div>
			<textarea name="body" placeholder="Post Body"></textarea>
		</div>

		<div>
			<button type="submit">Create Post</button>
		</div>
	</form>

@endsection