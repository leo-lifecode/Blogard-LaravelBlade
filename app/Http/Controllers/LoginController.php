<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('Login');
    }
    public function authenticate(Request $request): RedirectResponse
    {

        $credentials = $request->validate([
            'email' => 'email:dns|required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if(Auth::user()->is_admin) {
                return redirect()->intended('dashboard');
            }
            return redirect('/');
        }

        return back()->with('loginError', 'Email atau Password is Wrong!');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
