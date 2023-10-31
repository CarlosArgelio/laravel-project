<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function blog()
    {
        // get database
        $post = [
            ['id' => 1, 'title' => 'PHP', 'slug' => 'php'],
            ['id' => 2, 'title' => 'Laravel', 'slug' => 'laravel']
        ];

        return view('blog', ['posts' => $post]);
    }

    public function post($slug)
    {
        // Get data database
        $post = $slug;
        return view('post', ['post' => $post]);
    }
}
