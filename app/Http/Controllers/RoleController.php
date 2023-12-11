<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Services\RoleService;
use App\Http\Requests\RoleRequest;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    protected $view;

    public function __construct(ViewController $view)
    {
        $this->view = $view;
    }

    public function store(Request $request)
    {
    try{
        Role::create($request->all());


    }catch(\Exception $e){

        throw new \Exception($e->getMessage());
    }
        return redirect('/role');
    }

    public function index()
    {
        try{
            // $role = $this->roleService->index();
        }catch (\Exception $e){

            return $this->sendError($e->getMessage());
        }
        // return $this->successResponse($role);
    }

    public function show($id)
    {
        try{

            // $role = $this->roleService->show($id);

        }catch (\Exception $e){

            return $this->sendError($e->getMessage());
        }
        // return $this->successResponse($role);
    }

    public function destroy(int $id)
    {
        try{
            $role = Role::find($id);
            $role->delete();

        }catch (\Exception $e){
            return $this->sendError($e->getMessage());
        }
        return redirect('/role');
    }

    public function edit(int $id ,Request $request)
    {
        $user = Role::find($id);
        $user->update($request->all());

        $adduser = $this->view->main();
        try{
            return view('editrole', 
            [
                'tittle' => 'Edit Role',
                'user' => $adduser->user,
                'date' => $adduser->date,
                'greetings' => $adduser->greetings,
                'data' => $user
            ]);
        }catch (\Exception $e){
            throw new \Exception($e->getMessage());
        }
        return redirect('/role');
    }
}

