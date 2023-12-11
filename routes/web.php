<?php

use App\Models\Disposisi;
use App\Models\SuratKeluar;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DisposisiController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\UserAccountController;
use App\Http\Controllers\UserProfileController;

Route::get('/', [ LoginController::class, 'login']);

Route::get('/main', [ViewController::class, 'main'])->middleware('auth');

// Login
Route::get('/', [ViewController::class, 'login']);
Route::post('/logins', [LoginController::class, 'logins']);
Route::get('/logout', [LoginController::class, 'logout']);

// Add user
Route::get('/adduser', [ViewController::class, 'adduser']);
Route::get('/setting', [ViewController::class, 'setting']);
Route::get('/surateksternal', [ViewController::class, 'suratmasukeksternal']);
Route::get('/suratinternal', [ViewController::class, 'suratmasukinternal']);
Route::get('/suratkeluar', [ViewController::class, 'suratkeluar']);
Route::get('/addsuratkeluar', [ViewController::class, 'addsuratkeluar']);
Route::get('/disposisi', [ViewController::class, 'disposisi']);
Route::get('/listsuratkeluar', [ViewController::class, 'listsuratkeluar']);
Route::get('/suratmasuk', [ViewController::class, 'suratmasuk']);


// User Account
Route::post('/createuser', [UserAccountController::class, 'store']);
Route::get('/showuser', [ViewController::class, 'usershow']);
Route::get('/deleteuseraccount/{id}', [UserAccountController::class, 'destroy']);
Route::post('/edituseraccount/{id}', [UserAccountController::class, 'edit']);
Route::get('/edituseraccount/{id}', [UserAccountController::class, 'edit']);

// Employee
Route::get('/showemployee', [ViewController::class, 'showemployee']);
Route::get('/addemployee', [ViewController::class, 'addemployee']);
Route::get('/editemployee/{id}', [UserProfileController::class, 'edit']);
Route::post('/editemployee/{id}', [UserProfileController::class, 'edit']);
Route::get('/deleteemployee/{id}', [UserProfileController::class, 'destroy']);
Route::post('/createemployee', [UserProfileController::class, 'store']);

// Surat Masuk
Route::post('/surateksternal/store', [SuratMasukController::class, 'storeeksternal'])->middleware('auth');
Route::post('/suratinternal/store', [SuratMasukController::class, 'storeinternal'])->middleware('auth');
Route::get('deletesuratmasuk/{id}', [SuratMasukController::class, 'destroy']);
Route::get('editsuratmasuk/{id}', [SuratMasukController::class, 'edit']);
Route::post('editsuratmasuk/{id}', [SuratMasukController::class, 'edit']);

// Role Jabatan
Route::get('/role', [ViewController::class, 'role']);
Route::get('/addrole', [ViewController::class, 'addrole']); 

Route::post('/addroles', [RoleController::class, 'store']);
Route::get('/deleterole/{id}', [RoleController::class, 'destroy']);
Route::get('editrole/{id}', [RoleController::class, 'edit']);

// Disposisi
Route::get('/addisposisi', [ViewController::class, 'disposisi']);
Route::get('/listdisposisi', [ViewController::class, 'listdisposisi']);
Route::post('/addisposisis', [DisposisiController::class, 'store']);
Route::get('deletedisposisi/{id}', [DisposisiController::class, 'destroy']);
Route::post('editdisposisi/{id}', [DisposisiController::class, 'edit']);
Route::get('editdisposisi/{id}', [DisposisiController::class, 'edit']);

// Surat Keluar
Route::post('/suratkeluar/store', [SuratKeluarController::class, 'store']);
Route::get('deletesuratkeluar/{id}', [SuratKeluarController::class, 'destroy']);

// dashboard
Route::get('/dashboard', [ViewController::class, 'dashboard']);
