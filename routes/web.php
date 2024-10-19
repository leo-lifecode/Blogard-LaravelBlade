<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    $posts = Post::search()->with(['user', 'category'])->latest()->paginate(9);
    return view('home', ['posts' => $posts, 'categories' => Category::all()]);
});

Route::get('/post/{post:slug}', function (Post $post) {
    return view('post', [
        'post' => $post,
        'comments' => Comment::with(['user'])->where('post_id', $post->id)->get()
    ]);
});

Route::get('/category/{category:slug}', function (Category $category) {
    return view('category', [
        'posts' => $category->posts->load(['user', 'category']),
        'category' => $category,
        'categories' => Category::all()
    ]);
});

Route::get('/profile/{user:username}', function (User $user) {
    return view('profile', ['profiles' => $user]);
});

Route::get('/profile/{user:username}/settings', function (User $user) {
    return view('editProfile', ['profiles' => $user]);
});

Route::post('/profile/{user:username}/settings/edit', [ProfileController::class, 'edit']);

Route::get('/writeblog', function () {
    return view('writeBlog', ['categories' => Category::all()]);
});

Route::post('/writeblog/writecreate', [DashboardPostController::class, 'store']);
Route::post('/comment/commentcreate', [CommentController::class, 'store']);


Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/register', [RegisterController::class, 'store']);
});

Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    });

    Route::resource('/dashboard/posts', DashboardPostController::class);
    Route::resource('/dashboard/users', DashboardUserController::class)->except(['show', 'create', 'store']);
    Route::resource('/dashboard/category', DashboardCategoryController::class)->except(['show']);
});
