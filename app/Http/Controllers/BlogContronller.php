<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class BlogContronller extends Controller
{
    public function index() {
        $posts = Post::all();

        return view('blog/index')->with(['posts' => $posts]);
    }
}
