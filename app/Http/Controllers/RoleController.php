<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{

    public function store(Request $request){

    try{
        DB::beginTransaction();

        $request->validate([
            'RoleName' => 'required',
            'RoleCode' => 'required'
        ]);
        $role = Role::create($request->all());

    }catch(\Exception $e){

        DB::rollBack();
        throw new \Exception($e->getMessage());
    }
        DB::commit();
        return response($role);
    }

    public function index()
    {
        $role = Role::all();
        return response($role);
    }

    public function show($id)
    {
        try{
            DB::beginTransaction();
            $role = Role::find($id);
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
            $role = Role::find($id);
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

            $role = Role::find($id);
            $role->delete();

        }catch (\Exception $e){
            DB::rollBack();
            throw new \Exception($e->getMessage());
        }
            DB::commit();
            return response($role);
    }
}

