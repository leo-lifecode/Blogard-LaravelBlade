<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'post_id' => 'required|exists:posts,id', // Pastikan post_id valid
            'content' => 'required|min:5|max:250',
        ]);

        // Tambahkan user_id dari pengguna yang sedang login
        $validatedData['user_id'] = auth()->user()->id;

        Comment::create($validatedData);


        return redirect()->back()->with('success', 'Comment has been added!');
    }
}
