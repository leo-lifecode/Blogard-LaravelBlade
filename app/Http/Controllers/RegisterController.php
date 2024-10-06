<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('Registrasi');
    }
    public function store(Request $request)
    {
        $ValidatedData = $request->validate([
            'name' => 'required|max:255|min:5',
            'username' => 'required|max:20|min:8|unique:users',
            'email' => 'required|email:dns|max:255|unique:users',
            'password' => 'required|max:255|min:8',
        ]);

        
        User::create($ValidatedData);
        redirect('/login');
    }
}
