<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;


Route::get('/', function () {
    return view('Home')
        ->with('posts', Post::getAll());
});

Route::get('/post/{slug}', function ($slug) {
    // dd(Post::getOneData($slug));
    return view('post')
        ->with("post", Post::getOneData($slug));
});
