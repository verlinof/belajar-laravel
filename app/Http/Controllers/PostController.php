<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('blog', [
            "title" => "blog",
            "post" => Post::all()
        ]);
    }
    public function show(Post $post)
    {
        return view('post',[
            "title" => "single Post",
            "post" => $post
        ]);
    }
}