<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function profile()
    {
        $email = Session::get('user_email');
        if (!$email) {
            return redirect()->route('signin.form');
        }

        return view('user.profile', compact('email'));
    }
}
