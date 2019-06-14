@extends('layout')

@section('content')
<div class="container">

<h1>{{ $post->title }}</h1>

	<small>{{ $post-> updated_at}}</small><br>
	<?php  
			
			$owner_id = $post->owner_id;
			$username  = App\User::find($owner_id)->username;
	?>
	<br>By: <b>{{$username }}</b>

	<div class="well">
	 
		{{ $post->body }}

	</div>

	@if($post -> owner_id == auth()->id())
			<p>
				<a href="/posts/{{ $post->id }}/edit" class="btn btn-primary pull-right">Edit Post</a><br>
			</p>
	@endif

	<h3>Comments</h3>

	<div class="well">
	
		@if ($post->comments->count())
			<div>	
				@foreach($post->comments as $comment)
				<div>
					<form method="POST" action="/comments/{{ $comment->id }}">

						@method('DELETE')
						@csrf

						<div class="field">

							<br><small>{{ $comment-> updated_at}}</small>
							<?php  
								$owner_id = $comment->owner_id;
								$username  = App\User::find($owner_id)->username;
							?>
							
							<br><b>{{$username }} : </b>

							 	 {{ $comment->body }}<br>

							 	 	@if($comment -> owner_id == auth()->id())

							 	 	<div class="control">
							 	 		
							 	 		<div class="row">
					
											<div class="col-md-10 col-md-offset-2">
							 	 				
							 	 				<button type="submit" class="btn btn-danger btn-xs btn pull-right">Delete Comment</button>

							 	 			</div>

							 	 		</div>

							 	 	</div>
										
									@endif
						</div>

					</form>
				</div>
					
				@endforeach
			</div>
		@endif

	</div>
	<!-- {add a new comment form} -->
	<br>
	<br>
	<form method = "POST" action="/posts/{{ $post->id }}/comments" class="box">
		@csrf

		<div class="field">

		  <div class="control">

		    <input class="input, form-control" type="text" name="body" placeholder="New Comment" required><br>

		    <button class="btn btn-primary pull-right">Add Comment</button>
		 
		  </div>

		</div>

		@include('errors')

	</form>

</div>
@endsection