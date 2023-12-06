<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function main()
    {
        return view('partials.main',
        [ 
            'tittle' => 'Dashboard',
        ]);
    }

    public function login()
    {
        return view('login', [

            'tittle' => 'Login',
        ]);
    }
}
