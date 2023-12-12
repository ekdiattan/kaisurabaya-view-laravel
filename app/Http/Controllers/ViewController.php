<?php

namespace App\Http\Controllers;

use App\Models\Disposisi;
use App\Models\HakAkses;
use App\Models\Role;
use App\Models\SuratKeluar;
use App\Models\SuratMasuk;
use App\Models\UserAccount;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDO;

class ViewController extends Controller
{
    public function main()
    {
        $user = Auth::user();
        $date = date('d-m-Y');
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
        $user = UserProfile::all();
        $employee = HakAkses::all();
        
        return view('createuser', [

            'tittle' => 'Tambah Pengguna',
            'user' => $adduser->user,
            'date' =>$adduser->date,
            'greetings' => $adduser->greetings,
            'data' => $user,
            'employee' => $employee
        ]);
    }
    public function dashboard()
    {
        $adduser = $this->main();

        return view('dashboard', [

            'tittle' => 'Dashboard',
            'user' => $adduser->user,
            'date' =>$adduser->date,
            'greetings' => $adduser->greetings
        ]);
    }

    public function setting()
    {
        $adduser = $this->main();
        $role = Role::get('RoleName');

        return view('settinguser', 
        [
            'tittle' => 'Tambah Pengguna',
            'user' => $adduser->user,
            'date' =>$adduser->date,
            'greetings' => $adduser->greetings,
            'role' => $role
        ]);
    }

    public function suratmasukeksternal()
    {
        $adduser = $this->main();
        $suratmasukeksternal = SuratMasuk::all();
        $role = Role::all();

        return view('suratmasukeksternal', 
        [
            'tittle' => 'Surat Masuk Eksternal',
            'user' => $adduser->user,
            'date' => $adduser->date,
            'greetings' => $adduser->greetings,
            'suratmasukeksternal' => $suratmasukeksternal,
            'role' => $role
        ]);
    }
    public function suratmasukinternal()
    {
        $adduser = $this->main();

        return view('suratmasukinternal', 
        [
            'tittle' => 'Surat Masuk',
            'user' => $adduser->user,
            'date' => $adduser->date,
            'greetings' => $adduser->greetings
        ]);
    }

    public function suratkeluar()
    {
        $adduser = $this->main();
        $suratkeluar = SuratKeluar::all();
        $employee = UserProfile::all();
        return view('suratkeluar', 
        [
            'tittle' => 'Surat Keluar',
            'user' => $adduser->user,
            'date' => $adduser->date,
            'greetings' => $adduser->greetings,
            'suratkeluar' => $suratkeluar,
            'employee' => $employee
        ]);
    }

    public function disposisi()
    {
        $adduser = $this->main();
        $user = UserProfile::all();

        return view('disposisi', [

            'tittle' => 'Surat Keluar',
            'user' => $adduser->user,
            'date' => $adduser->date,
            'greetings' => $adduser->greetings,
            'employee' => $user
        ]);
    }

    public function addsuratkeluar(Request $request)
    {
        $adduser = $this->main();
        $user = UserProfile::all();
        return view('tambahsuratkeluar', [

            'tittle' => 'Tambah Surat Keluar',
            'user' => $adduser->user,
            'date' => $adduser->date,
            'greetings' => $adduser->greetings,
            'employee' => $user,

        ]);
    }

    public function suratmasuk()
    {
        $adduser = $this->main();
        $datamasuk = SuratMasuk::all();
        $role = Role::all();
        
        return view('suratmasuk', 
        [
            'tittle' => 'List Surat Masuk',
            'user' => $adduser->user,
            'date' => $adduser->date,
            'greetings' => $adduser->greetings,
            'datamasuk' => $datamasuk,
            'role' => $role
        ]);
    }

    public function usershow()
    {
        $adduser = $this->main();
        $users = UserAccount::all();
        return view('user', 
        [
            'tittle' => 'List Pengguna',
            'user' => $adduser->user,
            'date' => $adduser->date,
            'greetings' => $adduser->greetings,
            'users' => $users
        ]);
    }

    public function showemployee()
    {

        $adduser = $this->main();
        $employee = UserProfile::all();
        
        return view('employes', 
        [
            'tittle' => 'Data Pegawai',
            'user' => $adduser->user,
            'date' => $adduser->date,
            'greetings' => $adduser->greetings,
            'employee' => $employee,
        ]);
    }

    public function createstorevuseriew()
    {
        $adduser = $this->main();
        return view('createuser', 
        [
            'tittle' => 'List Surat Keluar',
            'user' => $adduser->user,
            'date' => $adduser->date,
            'greetings' => $adduser->greetings,
        ]);
    }

    public function role()
    {
        $role = Role::all();

        $adduser = $this->main();
        return view('role',[

            'tittle' => 'List Jabatan',
            'user' => $adduser->user,
            'date' => $adduser->date,
            'greetings' => $adduser->greetings,
            'role' => $role
        ]);
    }

    public function listdisposisi()
    {
        $adduser = $this->main();
        $disposisi = Disposisi::all();
        $user = UserProfile::all();

        return view('listdisposisi',
        [
            'tittle' => 'List Jabatan',
            'user' => $adduser->user,
            'date' => $adduser->date,
            'greetings' => $adduser->greetings,
            'disposisi' => $disposisi,
            'employee' => $user
        ]);
    }

    public function addemployee()
    {

        $adduser = $this->main();
        $role = Role::all();

        return view('createemployee', 
        [
            'tittle' => 'Tambah Pegawai',
            'user' => $adduser->user,
            'date' => $adduser->date,
            'greetings' => $adduser->greetings,
            'role' => $role
        ]);
    }

    public function addrole()
    {

        $adduser = $this->main();
        $employee = Role::all();

        return view('addrole',
        [
            'tittle' => 'Tambah Pegawai',
            'user' => $adduser->user,
            'date' => $adduser->date,
            'greetings' => $adduser->greetings,
            'employee' => $employee
        ]);
        
    }
}
