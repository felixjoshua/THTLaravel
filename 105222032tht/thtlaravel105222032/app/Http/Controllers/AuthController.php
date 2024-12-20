<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signinForm()
    {
        return view('auth.signin');
    }

    public function signin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        session(['user_email' => $request->email]);
        return redirect()->route('profile');
    }

    public function profile()
    {
        $email = session('user_email');
        if (!$email) {
            return redirect()->route('signin.form');
        }

        return view('user.profile', compact('email'));
    }
}
