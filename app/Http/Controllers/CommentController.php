<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Post $post, Request $request)
    {
        $rules = [
            'content' => 'requiredmin:5|max:250',
            'post_id' => 'required|exists:posts,id',
        ];
        $validatedData = $request->validate($rules);
        $validatedData['user_id'] = auth()->user()->id;
        
        $post->comments()->create($validatedData);
        
        return redirect()->back()->with('success', 'Comment has been added!');
    }
}
