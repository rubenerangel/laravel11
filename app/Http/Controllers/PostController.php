<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        // $posts = [
        //     ['title' => 'First post', ],
        //     ['title' => 'Second post', ],
        //     ['title' => 'Third post', ],
        //     ['title' => 'Forth post', ],
        // ];

        $posts = Post::get();

        return view('posts.index', compact('posts'));
    }

    // Practicing Type Hints
    function show(Post $post)
    {
        // return $post;
        return view('posts.show', ['post' => $post]);
    }
}
