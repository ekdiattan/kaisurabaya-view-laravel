<?php


namespace App\Services;

use App\Http\Requests\RoleRequest;
use App\Models\Role;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;

class RoleService
{

    protected $request;

    public function __construct(RoleRequest $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        try{
            $role = Role::all();
        }catch(\Exception $e)
        {
            throw new \Exception($e->getMessage());
        }
        return response($role);

    }

    public function show($id)
    {
        try{
            $role = Role::find($id);
        }catch(\Exception $e)
        {
            throw new \Exception($e->getMessage());
        }
        return response($role);
    }

    public function store(array $data)
    
    {
        try{
            DB::beginTransaction();


            $role = Role::create($data);

        }catch(\Exception $e)
        {
            DB::rollBack();
            throw new \Exception($e->getMessage());
        }
             DB::commit();
        return $role;
    }

    public function update( array $data, $id)
    {
        try{
            DB::beginTransaction();

            $role = Role::find($id);
            $role->update($data);

        }catch(\Exception $e)
        {
            DB::rollBack();
            throw new \Exception($e->getMessage());
        }
        DB::commit();
        return $role;
    }

    public function destroy(int $id)
    {
        try{
            DB::beginTransaction();

            $role = Role::find($id);
            $role->delete();
    }catch(\Exception $e)
    {
        DB::rollBack();
        throw new \Exception($e->getMessage());
    }
        return $role;
    }
}