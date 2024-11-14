<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;


class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.Registrasi');
    }
    public function store(Request $request)
    {
        $ValidatedData = $request->validate([
            'name' => 'required|max:255|min:5',
            'username' => 'required|max:20|min:8|unique:users',
            'email' => 'required|email:dns|max:255|unique:users',
            'password' => 'required|max:255|min:8',
        ]);

        $user = User::create($ValidatedData);
        Auth::login($user);
 
        event(new Registered($user));

        return redirect('/email/verify');
    }
}
