<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Services\RoleService;

class RoleController extends Controller
{

    protected $roleService;

    public function __construct(RoleService $roleService)
    {
        $this->roleService = $roleService;
    }

    public function store(Request $request){

    try{
        DB::beginTransaction();

        $store = $this->roleService->store($request->all());

    }catch(\Exception $e){

        DB::rollBack();
        throw new \Exception($e->getMessage());
    }
        DB::commit();
        return response($store);
    }

    // public function index()
    // {
    //     $role = Role::all();
    //     return response($role);
    // }

    // public function show($id)
    // {
    //     try{
    //         DB::beginTransaction();
    //         $role = Role::find($id);
    //     }catch (\Exception $e){
    //         DB::rollBack();
    //         throw new \Exception($e->getMessage());
    //     }
    //     DB::commit();

    //     return response($role);
    // }

    // public function update(Request $request, $id)
    // {
    //     try{
    //         DB::beginTransaction();
    //         $role = Role::find($id);
    //         $role->update($request->all());

    //     }catch (\Exception $e){
    //         DB::rollBack();
    //         throw new \Exception($e->getMessage());
    //     }

    //     DB::commit();
    //     return response($role);
    // }

    // public function destroy(int $id)
    // {
    //     try{
    //         DB::beginTransaction();

    //         $role = Role::find($id);
    //         $role->delete();

    //     }catch (\Exception $e){
    //         DB::rollBack();
    //         throw new \Exception($e->getMessage());
    //     }
    //         DB::commit();
    //         return response($role);
    // }
}

