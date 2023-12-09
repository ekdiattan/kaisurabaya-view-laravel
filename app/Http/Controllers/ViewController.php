<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    public function main()
    {
        $date = date('d-m-Y');
        $user = Auth::user()->user->UserName;
        $time = date('H');

        if($time < 12)
        {
            $greetings = "Selamat Pagi";
        }elseif($time < 15){
            $greetings = "Selamat Siang";
        }elseif($time < 18){
            $greetings = "Selamat Sore";
        }else{
            $greetings = "Selamat Malam";
        }

        return view('partials.main',
        [ 
            'tittle' => 'Dashboard',
            'date' => $date,
            'user' => $user,
            'greetings' => $greetings
        ]);
    }

    public function login()
    {
        return view('login', [

            'tittle' => 'Login',
        ]);
    }

    public function adduser()
    {
        $adduser = $this->main();

        return view('adduser', [

            'tittle' => 'Tambah Pengguna',
            'user' => $adduser->user,
            'date' =>$adduser->date,
            'greetings' => $adduser->greetings
        ]);
    }

    public function setting()
    {
        $user = Auth::user();
        $role = Role::get('RoleName');

        return view('settinguser', 
        [

            'tittle' => 'Akun Saya',
            'user' => $user,
            'role' => $role,
        ]);
    }

    public function suratmasukmagang()
    {
        $adduser = $this->main();

        return view('suratmasukmagang', 
        [
            'tittle' => 'Surat Masuk Magang',
            'user' => $adduser->user,
            'date' => $adduser->date,
            'greetings' => $adduser->greetings
        ]);
    }
}
