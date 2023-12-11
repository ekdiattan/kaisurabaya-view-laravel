<?php

namespace App\Http\Controllers;

use App\Models\HakAkses;
use App\Models\Role;
use Exception;
use App\Models\UserAccount;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserAccountController extends Controller
{

    protected $view;
    public function __construct(ViewController $view) 
    {
        $this->view = $view;
    }
    public function destroy(int $id)
        {
            try{
                DB::beginTransaction();
                
                $user = UserAccount::find($id);
                $user->delete();
                
            }catch (\Exception $e){
                DB::rollBack();
                throw new Exception($e->getMessage());
            }
                DB::commit();
                return redirect('/showuser');
        }

        public function store(Request $request)
        {
            try {
                DB::beginTransaction();

                $user = UserAccount::where('UserNameId', $request->UserNameId)->first();
                
                $exit = UserAccount::where('email', $request->email)->first();

                if ($user) 
                {
                    return redirect('/adduser')->withErrors('User sudah terdaftar!');
                }elseif ($exit) 
                {
                    return redirect('/adduser')->withErrors('Email sudah terdaftar!');
                }

                $requestData = $request->all();

                if ($request->has('password')) {
                    $requestData['password'] = Hash::make($requestData['password']);
                }

                UserAccount::create($requestData);
                DB::commit();

            } catch (\Exception $e) {
                DB::rollBack();
                throw new Exception($e->getMessage());
            }
            return redirect('/showuser')->with('success', 'User berhasil dibuat');
        }

        public function edit(int $id, Request $request)
        {
            $user = UserAccount::find($id);

            // Menyimpan data password yang lama sebelum update
            $oldPassword = $user->password;

            // Memperbarui hanya jika ada data yang dikirim
            if ($request->filled('password')) {
                $user->update($request->all());
            } else {
                $user->update($request->except('password'));
                $user->password = $oldPassword; // Memperbarui password dengan nilai lama
                $user->save();
            }

            $adduser = $this->view->main();
            $employee = HakAkses::all();

            try {
                return view('edituser', [
                    'tittle' => 'Edit Pegawai',
                    'user' => $adduser->user,
                    'date' => $adduser->date,
                    'greetings' => $adduser->greetings,
                    'data' => $user,
                    'employee' => $employee
                ]);
            } catch (\Exception $e) {
                throw new \Exception($e->getMessage());
            }
            return redirect("/editemployee/{$id}");
        }
}
