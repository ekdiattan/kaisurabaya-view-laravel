<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
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

        $store=Role::create($request->all());
    }catch(\Exception $e){

        DB::rollBack();

        throw new \Exception($e->getMessage());
    }
        DB::commit();

        return response()->json([
            'status' => 'success',
            'data' => $store
        ]);
    }
}

