<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', function () {
    return 'List blogs';
});

Route::get('/blog/{slug}', function ($slug) {
    // Get data database
    return $slug;
});

Route::get('/buscar', function (Request $request) {
    return $request->all();
});
