<?php

namespace App\Http\Controllers;

use App\Models\UserAccount;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class AuthController extends Controller
{
    use HasApiTokens, HasFactory, Notifiable;

    public function login()
    {
        try {
            if (!Auth::attempt(['UserEmail' => request('UserEmail'), 'UserPassword' => request('UserPassword')]))
        
            $user = Auth::user();
            $user_token['token'] = $user->createToken('appToken')->accessToken;
        
            return response()->json([
                'success' => true,
                'token' => $user_token,
                'user' => $user,
            ], 200);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 401);
        }
    }

    public function register(){
        $user = UserAccount::create([
            'UserEmail' => request('UserEmail'),
            'UserPassword' => Hash::make(request('UserPassword')),
        ]);

        $user_token['token'] = $user->createToken('appToken')->accessToken;

        return response()->json([
            'success' => true,
            'token' => $user_token,
            'user' => $user,
        ], 200);
    }

}
