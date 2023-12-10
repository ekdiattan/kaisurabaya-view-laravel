<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\UserAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserAccountController extends Controller
{
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
}
