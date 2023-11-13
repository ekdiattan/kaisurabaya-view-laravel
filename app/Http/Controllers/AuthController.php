<?php

namespace App\Http\Controllers;

use App\Models\UserAccount;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;

class AuthController extends Controller
{
    use HasApiTokens, HasFactory, Notifiable;

    public function register()
    {
        try {
            DB::beginTransaction();

            $intro = UserProfile::create([
                'UserName' => request('UserName'),
                'UserAddress' => request('UserAddress'),
                'UserGender' => request('UserGender'),
                'UserRoleId' => request('UserRoleId'),
                'UserPhone' => request('UserPhone'),
                'UserProfileCreatedBy' => Auth::id(),
                'UserProfileUpdatedBy' => Auth::id(),
            ]);

            $user = UserAccount::create([
                'email' => request('UserEmail'),
                'password' => Hash::make(request('UserPassword')),
                'UserNameId' => $intro->UserProfileId,
                'UserAccountCreatedBy' =>  Auth::id(),
                'UserAccountUpdatedBy' => Auth::id(),
            ]);

            DB::commit();
            return $this->successResponse([
                'User Profile' => $intro,
                'User Account' => $user,
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            throw new \Exception($e->getMessage());
        }
    }

    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->UserEmail, 'password' => $request->UserPassword])) {
            $token = auth()->user()->createToken('MyAppToken')->accessToken;
        } else {
            Log::error('Login failed for user with email: ' . $request->UserEmail);
            return response()->json([], 401);
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

    public function me()
    {
        try {
            $user = Auth::user();
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
        return $this->successResponse($user);
    }
}
