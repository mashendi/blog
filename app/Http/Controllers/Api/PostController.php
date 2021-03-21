<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostFormRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::with('user')->paginate();
//        $posts = Post::all();
        return PostResource::collection($posts);
    }


    public function store(PostFormRequest $request)
    {
        $res = Post::create($request->all());
        return \response()->json($res);
    }


    public function show($post)
    {
        $post = Post::find($post);
        return new PostResource($post);
    }
}
