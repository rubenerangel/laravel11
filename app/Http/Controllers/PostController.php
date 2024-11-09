<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

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

    function create() {
        // return 'Create form';
        return view('posts.create');
    }

    function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'min:4'],
            'body' => ['required'],
        ]);
        $post = new Post();
        $post->title = $request->input('title');
        $post->title = $request->input('body');
        $post->save();

        session()->flash('status', 'Post created');

        // return redirect()->route('posts.index');
        return to_route('posts.index');
    }
}
