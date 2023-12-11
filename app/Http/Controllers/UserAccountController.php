<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\UserAccount;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserAccountController extends Controller
{
    public function destroy(int $id)
        {
            try{
                DB::beginTransaction();
                
                $user = UserAccount::find($id);
                $user->delete();
                
            }catch (\Exception $e){
                DB::rollBack();
                throw new Exception($e->getMessage());
            }
                DB::commit();
                return redirect('/showuser');
        }

        public function store(Request $request)
        {
            try {
                DB::beginTransaction();

                $user = UserAccount::where('UserNameId', $request->UserNameId)->first();
                
                $exit = UserAccount::where('email', $request->email)->first();

                if ($user) 
                {
                    return redirect('/adduser')->withErrors('User sudah terdaftar!');
                }elseif ($exit) 
                {
                    return redirect('/adduser')->withErrors('Email sudah terdaftar!');
                }

                $requestData = $request->all();

                if ($request->has('password')) {
                    $requestData['password'] = Hash::make($requestData['password']);
                }

                UserAccount::create($requestData);
                DB::commit();

            } catch (\Exception $e) {
                DB::rollBack();
                throw new Exception($e->getMessage());
            }
            return redirect('/showuser')->with('success', 'User berhasil dibuat');
        }
}
