<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/blog', function () {
    // get database
    $post = [
        ['id' => 1, 'title' => 'PHP', 'slug' => 'php'],
        ['id' => 2, 'title' => 'Laravel', 'slug' => 'laravel']
    ];

    return view('blog', ['posts' => $post]);
});

Route::get('/blog/{slug}', function ($slug) {
    // Get data database
    $post = $slug;
    return view('post', ['post' => $post]);

});
