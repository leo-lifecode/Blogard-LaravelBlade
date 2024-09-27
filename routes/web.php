<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;

Route::get('/', function () {
    return view('Home')
        ->with('posts', Post::all());
});

Route::get('/post/{post:slug}', function (Post $post) {
    return view('Post')
        ->with("post", $post);
});

Route::get('/profile/{user:username}', function (User $user) {
    return view('Profile')
    ->with("Profiles", $user);
});

Route::get('/category/{category:name}', function (Category $category) {
    return view('category')
    ->with("posts", $category->posts);
});
