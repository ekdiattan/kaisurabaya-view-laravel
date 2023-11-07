<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

Route::apiResource('roles', RoleController::class);

Route::apiResource('users', UserController::class);

Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'register']);



