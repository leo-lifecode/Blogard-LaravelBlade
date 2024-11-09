<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts =  Post::Search()->get();
        return view('dashboard.posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.posts.createPost', ['Categories' => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required|unique:posts|max:255|min:5',
            'content' => 'required',
            'category_id' => 'required',
            'image' => 'image|file',
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        if ($request->slug) {
            $validatedData['slug'] = Str::slug($request['slug'], '-');
        } else {
            $validatedData['slug'] = Str::slug($validatedData['title'], '-');
        }
        Post::create($validatedData);

        return redirect('/dashboard/posts')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.showPost', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.editPost', ['post' => $post, 'Categories' => Category::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' => 'required|max:255|min:5',
            'content' => 'required',
            'category_id' => 'required',
        ];

        if ($request->slug != $post->slug) {
            $rules['slug'] = 'required|unique:posts';
        }

        $validatedData = $request->validate($rules);


        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        Post::where('id', $post->id)->update($validatedData);
        return redirect('/dashboard/posts')->with('success', 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        Storage::delete($post->image);
        Post::destroy($post->id);
        return redirect('/dashboard/posts')->with('success', 'Post has been deleted!');
    }

    public function WriteBlogEdit(Request $request, Post $post)
    {
        return view('WriteBlogEdit', ['request'=>$request, 'post' => $post, 'Categories' => Category::all()]);
    }

    public function WriteBlogUpdate(Request $request, Post $post)
    {
        
        $rules = [
            'title' => 'required|max:255|min:5',
            'content' => 'required',
            'category_id' => 'required',
        ];

        $validatedData = $request->validate($rules);
        $validatedData['slug'] = Str::slug($request['title'], '-');
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        Post::where('id', $post->id)->update($validatedData);
        return redirect('/')->with('success', 'Post has been updated!');
    }
    public function chartPost(): View
    {
        $monthlyPosts = Post::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        $labels = $monthlyPosts->map(function ($data) {
            return Carbon::create()->month($data->month)->format('F');
        });
        $posts = $monthlyPosts->pluck('count');

        return view('dashboard.index', [
            'labels' => $labels,
            'posts' => $posts,
            'totalPosts' => Post::count(),
            'users' => User::count(),
            'comments' => Comment::count(),
        ]);
        
    }
}
