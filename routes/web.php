<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ViewController;

Route::get('/', [ LoginController::class, 'login']);

Route::get('/main', [ViewController::class, 'main']);
Route::get('/', [ViewController::class, 'login']);
