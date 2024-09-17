<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function show()
    {
        $post = new Post;

        $post->title = "First Blog Post";
        $post->body = "Lorem Ipsum, etc.";
        $post->slug = "first-blog-post";

        $post->save();
        return view('post', compact('post'));
    }

}
