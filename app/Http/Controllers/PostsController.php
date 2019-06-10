<?php

namespace Laravel\Http\Controllers;

use Laravel\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('can:update,project')->except(['index','create','store']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = \Laravel\Post::all();

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $attributes = request()->validate([
            'title' => ['required', 'min:3'],
            'body' => ['required', 'min:3'],
        ]);

        $attributes['owner_id'] = auth()->id();
        
        Post::create($attributes);

        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Laravel\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {

        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Laravel\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {

        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Laravel\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Post $post)
    {

        $post->update(request(['title', 'body']));

        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Laravel\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/posts');
    }

}


