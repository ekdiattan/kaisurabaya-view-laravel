<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function store(Request $request){

        try{
            DB::beginTransaction();
    
            $request->validate([
                'UserName' => 'required',
                'UserAddres' => 'required',
                'UserGender' => 'required',
                'UserRoleId' => 'required',
                'UserPhone' => 'required'
            ]);
            $role = User::create($request->all());
    
        }catch(\Exception $e){
    
            DB::rollBack();
            throw new \Exception($e->getMessage());
        }
            DB::commit();
            return response($role);
        }
    
        public function index()
        {
            $role = User::all();
            return response($role);
        }
        
        public function show($id)
        {
            try{
                DB::beginTransaction();
                $role = User::with(['role'])->find($id);
            }catch (\Exception $e){
                DB::rollBack();
                throw new \Exception($e->getMessage());
            }
            DB::commit();
    
            return response($role);
        }
    
        public function update(Request $request, $id)
        {
            try{
                DB::beginTransaction();
                $role = User::find($id);
                $role->update($request->all());
    
            }catch (\Exception $e){
                DB::rollBack();
                throw new \Exception($e->getMessage());
            }
    
            DB::commit();
            return response($role);
        }
    
        public function destroy(int $id)
        {
            try{
                DB::beginTransaction();
    
                $role = User::find($id);
                $role->delete();
    
            }catch (\Exception $e){
                DB::rollBack();
                throw new \Exception($e->getMessage());
            }
                DB::commit();
                return response($role);
        }

        public function login(Request $request)
        {
            $credentials = $request->only('UserEmail', 'UserPassword');
                if (Auth::attempt($credentials)) {
                    
                    $user = Auth::user();
                    $token = $user->createToken('MyApp')->accessToken;

                    return response([
                        'token' => $token,
                        'user' => $user
                    ]);
                } else {
                    return response(['error' => 'Unauthorized'], 401);
            }
        }

        public function register(){
            try{
                DB::beginTransaction();

                $user = UserAccount::create([
                    'UserNameId' => request('UserNameId'),
                    'UserEmail' => request('UserEmail'),
                    'UserPassword' => bcrypt(request('UserPassword')),
                ]);

                $token = $user->createToken('MyApp')->accessToken;

            }catch (\Exception $e){
                DB::rollBack();
                throw new \Exception($e->getMessage());
            }
                DB::commit();

                return response([
                    'token' => $token,
                    'user' => $user
                ]);

           
        }
}
