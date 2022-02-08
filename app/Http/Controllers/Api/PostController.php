<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\JsonResponse;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return new JsonResponse($posts);
    }

    public function show(Post $post)
    {
        return new JsonResponse($post);
    }

    public function store(PostRequest $postRequest)
    {
        $post = Category::create($postRequest);

        return new JsonResponse($post);
    }

    public function update($id, PostRequest $postRequest)
    {
        $post = Category::find($id);
        $post->update();

        return new JsonResponse($post);
    }

    public function destroy($id)
    {
        $post = Post::find($id);

        $post->delete();

        return new JsonResponse(null);
    }
}
