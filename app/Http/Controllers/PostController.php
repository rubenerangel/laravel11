<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth')->only('create', 'store', 'edit', 'update', 'destroy');
        $this->middleware('auth')->except('index', 'show');
    }
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

    function create()
    {
        // return 'Create form';
        return view('posts.create', ['post' => new Post]);
    }

    // function store(Request $request)
    function store(SavePostRequest $request)
    {
        // $validated = $request->validate([
        //     'title' => ['required', 'min:4'],
        //     'body' => ['required'],
        // ], [
        //     'title.required' => 'Error diferente :attribute'
        // ]);

        // $post = new Post();
        // $post->title = $request->input('title');
        // $post->body = $request->input('body');
        // $post->save();

        // Post::create([
        //     'title' =>  $request->input('title'),
        //     'body' => $request->input('body'),
        // ]);

        Post::create($request->validated());

        // session()->flash('status', 'Post created');

        // return redirect()->route('posts.index');
        return to_route('posts.index')
            ->with('status', 'Post created');
    }

    function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    function update(SavePostRequest $request, Post $post)
    {
        // $validated = $request->validate([
        //     'title' => ['required', 'min:4'],
        //     'body' => ['required'],
        // ], [
        //     'title.required' => 'Error diferente :attribute'
        // ]);

        // $post->title = $request->input('title');
        // $post->body = $request->input('body');
        // $post->save();

        // $post->update([
        //     'title' => $request->input('title'),
        //     'body' => $request->input('body'),
        // ]);

        $post->update($request->validated());

        // session()->flash('status', 'Post updated!');

        // return redirect()->route('posts.index');
        return to_route('posts.show', $post)
            ->with('status', 'Post updated');;
    }

    function destroy(Post $post)
    {
        $post->delete();

        return to_route('posts.index')
            ->with('status', 'Post deleted');
    }
}
