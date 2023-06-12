<?php

namespace App\Http\Controllers;

use App\Events\PostCreatedEvent;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    public function create(Request $request)
    {
        $post = Post::create(['title' => 'Fourth title' , 'content' => 'whatever']);

        event(new PostCreatedEvent($post));
    }
}
