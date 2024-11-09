<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            ['title' => 'First post', ],
            ['title' => 'Second post', ],
            ['title' => 'Third post', ],
            ['title' => 'Forth post', ],
        ];

        return view('blog', compact('posts'));
    }
}
