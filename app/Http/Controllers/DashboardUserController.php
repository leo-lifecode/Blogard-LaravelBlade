<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $user)
    {
        return view('dashboard.users.index', [
            'users' => User::with('posts')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {

        return view('dashboard.users.editUser', ['user' => User::find($id)]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'email' => 'required|max:255|min:5',
            'is_admin' => 'required',
        ];

        if ($request->username != $user->username) {
            $rules['username'] = 'required|unique:users';
        }

        $validatedData = $request->validate($rules);


        if ($request->file('avatar')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['avatar'] = $request->file('avatar')->store('users-avatar');
        }

        User::where('id', $user->id)->update($validatedData);
        return redirect('/dashboard/users')->with('success', 'user has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('/dashboard/users')->with('success', 'User has been deleted!');
    }
}
