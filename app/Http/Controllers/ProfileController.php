<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function edit(Request $request, User $user)
    {
        $rules = [
            'name' => 'required|max:255|min:5',
            'email' => 'required|email:dns|max:255',
            'avatar' => 'image|file|max:3024',
            'password' => 'required|max:255|min:8',
        ];

        if ($request->username != $user->username) {
            $rules['username'] = 'required|max:255|min:5|unique:users';
        }

        $validated = $request->validate($rules);
        $validated['password'] = bcrypt($request->password);
        if ($request->file('avatar')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['avatar'] = $request->file('avatar')->store('users-avatar');
        }

        User::where('id', $user->id)->update($validated);

        return redirect('/profile/' . $user->username)->with('success', 'Profile has been updated!');
    }
}
