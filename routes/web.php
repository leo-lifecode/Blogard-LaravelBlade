<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;


Route::get('/', function () {
    return view('Home')
        ->with('posts', Post::all());
});

Route::get('/post/{post:slug}', function (Post $post) {
    // dd(Post::getOneData($slug));
    return view('post')
        ->with("post", $post);
});
