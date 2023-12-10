<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleRequest;
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

    public function store(RoleRequest $request){

    try{

        $role = $this->roleService->store($request->all());
        
    }catch(\Exception $e){

        throw new \Exception($e->getMessage());
    }
        return $this->successResponse($role);
    }

    public function index()
    {
        try{
            $role = $this->roleService->index();
        }catch (\Exception $e){

            return $this->sendError($e->getMessage());
        }
        return $this->successResponse($role);
    }

    public function show($id)
    {
        try{

            $role = $this->roleService->show($id);

        }catch (\Exception $e){

            return $this->sendError($e->getMessage());
        }
        return $this->successResponse($role);
    }

    public function update(Request $request, $id)
    {
        try{
            $role= $this->roleService->update($request->all(), $id);

        }catch (\Exception $e){
        DB::rollBack();
            return $this->sendError($e->getMessage());
        }

        DB::commit();
        return $this->successResponse($role);
    }

    public function destroy(int $id)
    {
        try{

            $role = $this->roleService->destroy($id);

        }catch (\Exception $e){
            return $this->sendError($e->getMessage());
        }
        return $this->successResponse($role);
    }
}

