<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MailIncomingController;

Route::apiResource('roles', RoleController::class);

Route::apiResource('users', UserController::class);

Route::apiResource('mail-incomings', MailIncomingController::class);

Route::post('login', [AuthController::class, 'login']);

Route::post('register', [AuthController::class, 'register']);



