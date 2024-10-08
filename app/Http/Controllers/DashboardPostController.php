<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use Illuminate\Support\Str;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts =  Post::where('user_id', Auth::user()->id)->get();
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

        // dd($request->all());
        $validatedData = $request->validate([
            'title' => 'required|unique:posts|max:255|min:5',
            'content' => 'required',
            'category_id' => 'required',
            'image' => 'required',
            'slug' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        // $validatedData['slug'] = Str::slug($validatedData['title'], '-');
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        // $validatedData['image'] = $request->file('image')->store('post-images');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
