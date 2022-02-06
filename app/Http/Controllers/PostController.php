<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', [
            'posts' => $posts
        ]);
    }


    public function store(Request $request)
    {
        Post::create($request->all());

        return redirect()->route('posts.index');
    }


    public function create()
    {
        return view('posts.create');
    }


    public function update(Post $post, Request $request)
    {
        $post->update($request->all());

        return redirect()->route('posts.index');
    }


    public function edit(Post $post)
    {

        return view('posts.edit', [
            'posts' => $post
        ]);
    }


    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');
    }
}