<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Post;

class PostsController extends Controller
{
        public function index()
    {

        $post = Post::all();

        return view('post', ['post' => $post
        ]);
    }
}
