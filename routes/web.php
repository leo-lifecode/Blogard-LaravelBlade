<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;

Route::get('/', function () {
    $posts = Post::Search()->with(['user', 'category'])->latest()->paginate(9);

    return view('Home', ['posts' => $posts]);
});

Route::get('/post/{post:slug}', function (Post $post) {
    return view('Post')
        ->with("post", $post);
});

Route::get('/profile/{user:name}', function (User $user) {
    return view('Profile')
        ->with("Profiles", $user);
});

Route::get('/category/{category:slug}', function (Category $category) {
    return view('category')
        ->with("posts", $category->posts->load(['user', 'category']));
});

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
