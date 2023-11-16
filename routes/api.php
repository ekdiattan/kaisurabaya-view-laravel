<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\UserAccountControler;
use App\Http\Controllers\MailIncomingController;
use App\Http\Controllers\InternshipLetterController;



Route::post('login', [AuthController::class, 'login']);


Route::middleware('auth:api')->group(function () {

    // Role API
    Route::apiResource('roles', RoleController::class);

    // User Profile API
    Route::apiResource('user-profiles', UserProfileController::class);
    
    // Mail Incoming API
    Route::apiResource('mail-incomings', MailIncomingController::class);

    // User Account API
    Route::apiResource('user-accounts', UserAccountControler::class);

    // Auth API
    Route::post('register', [AuthController::class, 'register']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::get('me', [AuthController::class, 'me']);

    // InternshipLetters
    Route::apiResource('internship-letters', InternshipLetterController::class);
    Route::post('generateCod', [MailIncomingController::class, 'generateCode']);
    
});


