<?php

use App\Http\Controllers\chartJsController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\passwordController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', function () {
    $posts = Post::search()->with(['user', 'category'])->latest()->paginate(9);
    return view('home', ['posts' => $posts, 'categories' => Category::all()]);
});

Route::get('/email/verify', [passwordController::class, 'emailNotice'])->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [passwordController::class, 'emailVerify'])->middleware(['auth', 'signed'])->name('verification.verify');
Route::view('/forgot-password','auth.forgot-password')->middleware('guest')->name('password.request');
Route::post('/forgot-password', [passwordController::class, 'forgotPassword'])->middleware('guest')->name('password.email');
Route::get('/reset-password/{token}', function (string $token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');
Route::post('/reset-password',[passwordController::class, 'resetPassword'])->middleware('guest')->name('password.update');


Route::get('/post/{post:slug}', function (Post $post) {
    return view('post', [
        'post' => $post,
        'comments' => Comment::with(['user'])->where('post_id', $post->id)->get(),
    ]);
});

Route::get('/category/{category:slug}', function (Category $category) {
    return view('category', [
        'posts' => $category->posts->load(['user', 'category']),
        'category' => $category,
        'categories' => Category::all(),
    ]);
});

// Guest Routes (for users not authenticated)
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/register', [RegisterController::class, 'store']);
});

Route::get('/profile/{user:username}', function (User $user) {
    return view('profile', ['profile' => $user]);
});

// Authenticated User Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile/{user:username}/settings', function (User $user) {
        return view('editProfile', ['profile' => $user]);
    });

    Route::post('/profile/{user:username}/settings/edit', [ProfileController::class, 'edit']);

    // Blog Writing and Comment Routes
    Route::get('/writeblog', function () {
        return view('writeBlog', ['categories' => Category::all()]);
    });

    Route::post('/writeblog/store', [DashboardPostController::class, 'store']);
    Route::get('/writeblog/edit/{post:slug}', [DashboardPostController::class, 'WriteBlogEdit'])->middleware('existEditorPost');
    Route::delete('/writeblog/delete/{post:id}', [DashboardPostController::class, 'destroy'])->middleware('existEditorPost');
    Route::put('/writeblog/WriteBlogUpdate/{post:id}', [DashboardPostController::class, 'WriteBlogUpdate']);
    Route::post('/comment/commentcreate', [CommentController::class, 'store']);

    // Logout Route
    Route::post('/logout', [LoginController::class, 'logout']);
});

// Admin Routes (only accessible by admin users)
Route::middleware(['auth', 'onlyAdmin', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardPostController::class, 'chartPost']);

    Route::resource('/dashboard/posts', DashboardPostController::class);
    Route::resource('/dashboard/users', DashboardUserController::class)->except(['show', 'create', 'store']);
    Route::resource('/dashboard/category', DashboardCategoryController::class)->except(['show']);
});
