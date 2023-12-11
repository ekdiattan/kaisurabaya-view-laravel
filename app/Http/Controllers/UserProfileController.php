<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\UserAccount;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ViewController;


class UserProfileController extends Controller
{   
        protected $view;
        public function __construct(ViewController $view)
        {
            $this->view = $view;
        }
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
    
        }
        
        public function store(Request $request)
        {
            try{
                DB::beginTransaction();
                UserProfile::create($request->all());
            }catch (\Exception $e){
                DB::rollBack();
                throw new \Exception($e->getMessage());
            }
            DB::commit();
            
            return redirect('/showemployee');
        }
        
        public function edit(int $id ,Request $request)
        {
            $user = UserProfile::find($id);
            $user->update($request->all());
            
            $adduser = $this->view->main();
            $role = Role::all();
            try{
                return view('editemployee', [
                    'tittle' => 'Edit Pegawai',
                    'user' => $adduser->user,
                    'date' => $adduser->date,
                    'greetings' => $adduser->greetings,
                    'data' => $user,
                    'role' => $role
                ]);
            }catch (\Exception $e){
                throw new \Exception($e->getMessage());
        }
        return redirect('/editemployee/{$id}');
    }

    public function destroy(int $id)
    {

        $user = UserProfile::find($id)->delete();
        return redirect('/showemployee');
    }
}
