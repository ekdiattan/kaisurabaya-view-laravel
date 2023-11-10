<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{   
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
}
