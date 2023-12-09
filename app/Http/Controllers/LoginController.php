<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return ("This Is Laravel API !");
    }

    public function logins(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        
        if (Auth::attempt(['email' => $email, 'password' => $password])) 
        {
            return redirect()->intended('/main');
        } else {
            return back()->withErrors(['email' => 'Email atau kata sandi salah.']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
