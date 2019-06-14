@extends('layout')

@section('content')

	<div class="container">
		<h1 class="title">Users</h1>

		@foreach ($users as $user)
		<div class="well">
			<a href="/users/{{ $user-> id }}"><br>
				<h3>{{ $user-> username }}</h3>
			</a>
		</div>
			
		@endforeach
	</div>

@endsection