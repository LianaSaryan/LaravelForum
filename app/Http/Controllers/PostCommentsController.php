<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Comment;
use App\Post;

class PostCommentsController extends Controller
{
	public function store(Post $post)
	{
		$attributes = request()->validate(['body' => ['required', 'min:3']]);

		$attributes['owner_id'] = auth()->id();

		$post->addComment($attributes);

		return back();
	}

    public function destroy(Comment $comment)
    {
    	$post = \App\Post::find($comment->post_id);
    	$comment->delete();

    	return back();
    }
}
