<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserProfileController extends Controller
{   
        public function index()
        {
            $role = UserProfile::all();
            return response($role);
        }
        
        public function show($id)
        {
            try{
                DB::beginTransaction();
                $role = UserProfile::with(['role'])->find($id);
            }catch (\Exception $e){
                DB::rollBack();
                throw new \Exception($e->getMessage());
            }
            DB::commit();
    
            return response($role);
        }
        
        public function store(Request $request)
        {
            try{
                DB::beginTransaction();
                $role = UserProfile::create($request->all());
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
                $role = UserProfile::find($id);
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
    
                $role = UserProfile::find($id);
                $role->delete();
    
            }catch (\Exception $e){
                DB::rollBack();
                throw new \Exception($e->getMessage());
            }
                DB::commit();
                return response($role);
        }
}
