<?php

namespace App\Http\Controllers;

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

        $posts = DB::table('posts')->get();

        return view('blog', compact('posts'));
    }
}
