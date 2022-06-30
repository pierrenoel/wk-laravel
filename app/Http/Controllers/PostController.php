<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        return view('welcome',["posts" => Post::all()]);
    }

    public function show(Post $post)
    {
        return view('post.show',["post" => $post]);
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(PostRequest $request)
    {
        Post::create([
            'title' => $request['title'],
            'excerpt' => $request['excerpt'],
            'body' => $request['body'],
            'slug' => Str::slug($request['title']),
            "category_id" => 1
        ]);

        return redirect('/');
    }

    public function edit(Post $post)
    {
        return view('post.edit',["post" => $post]);
    }

    public function update(PostRequest $request, Post $post)
    {
        $post->update([
            'title' => $request['title'],
            'excerpt' => $request['excerpt'],
            'body' => $request['body'],
            'slug' => Str::slug($request['title']),
            'category_id' => 1
        ]);

        return redirect('/');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
}