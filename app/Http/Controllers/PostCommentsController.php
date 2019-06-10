<?php

namespace Laravel\Http\Controllers;


use Illuminate\Http\Request;
use Laravel\Comment;
use Laravel\Post;

class PostCommentsController extends Controller
{
	public function store(Post $post)
	{
		$attributes = request()->validate(['body' => ['required', 'min:3']]);

		$attributes['owner_id'] = auth()->id();

		$attributes['comment_belongs_to'] = $post->id;

		$post->addComment($attributes);

		return back();
	}

    public function destroy(Comment $comment)
    {
    	$post = \Laravel\Post::find($comment->post_id);
    	$comment->delete();

    	return back();
    }
}
