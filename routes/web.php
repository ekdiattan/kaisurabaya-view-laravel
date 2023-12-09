<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ViewController;

Route::get('/', [ LoginController::class, 'login']);

Route::get('/main', [ViewController::class, 'main'])->middleware('auth');

// Login
Route::get('/', [ViewController::class, 'login']);
Route::post('/logins', [LoginController::class, 'logins']);
Route::get('/logout', [LoginController::class, 'logout']);

// Add user
Route::get('/adduser', [ViewController::class, 'adduser']);
Route::get('/setting', [ViewController::class, 'setting']);
Route::get('/suratmasukmagang', [ViewController::class, 'suratmasukmagang']);

