<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserAccount;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;



class AuthController extends Controller
{
    use HasApiTokens, HasFactory, Notifiable;

    // public function login()
    // {
    //     try {
    //         if (!Auth::attempt(['UserEmail' => request('UserEmail'), 'UserPassword' => request('UserPassword')]))
        
    //         $user = Auth::user();
    //         $user_token['token'] = $user->createToken('appToken')->accessToken;
        
    //         return response()->json([
    //             'success' => true,
    //             'token' => $user_token,
    //             'user' => $user,
    //         ], 200);
            
    //     } catch (\Exception $e) {
    //         return response()->json([
    //             'success' => false,
    //         'message' => $e->getMessage(),
    //         ], 401);
    //     }
    // }

    public function register()
    {

        try{
            DB::beginTransaction();

            $intro = UserProfile::create([
                'UserName' => request('UserName'),
                'UserAddress' => request('UserAddress'),
                'UserGender' => request('UserGender'),
                'UserRoleId' => request('UserRoleId'),
                'UserPhone' => request('UserPhone'),
            ]);
            
            $user = UserAccount::create([
                'UserEmail' => request('UserEmail'),
                'UserPassword' => Hash::make(request('UserPassword')),
                'UserNameId' => $intro->UserProfileId,
            ]);
            
        }catch (\Exception $e){
            DB::rollBack();
            throw new \Exception($e->getMessage());
        }
        DB::commit();
        return $this->successResponse([
            'User Profile' => $intro,
            'User Account' => $user,
        ]);
    }

        public function login(Request $request)
        {
            if (Auth::attempt(['email' => $request->UserEmail, 'password' => $request->UserPassword])) 
            {
                $token = auth()->user()->createToken('MyAppToken')->accessToken;

            } else {
                Log::error('Login failed for user with email: ' . $request->UserEmail);
                return response()->json(['error' => 'Unauthorized'], 401);
            }
            return response()->json([
                'success' => true,
                'user' => auth()->user(),
                'token' => $token
            ], 200);
        }

        public function logout(Request $request)
        {
            $request->user()->token()->revoke();
            return response()->json(['message' => 'Successfully logged out'], 200);
        }
}
