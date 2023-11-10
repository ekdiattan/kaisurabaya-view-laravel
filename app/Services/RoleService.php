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
        return 'index';
    }

    public function show()
    {
        return 'show';
    }

    public function store(array $data)
    
    {
        try{
            DB::beginTransaction();

            // $this->request->validate();

            $role = Role::create($data);

        }catch(\Exception $e)
        {
            DB::rollBack();

            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }

             DB::commit();
             return response($role);
    }

    public function update()
    {
        return 'update';
    }

    public function destroy()
    {
        return 'destroy';
    }
}