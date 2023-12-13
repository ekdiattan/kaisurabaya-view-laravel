<?php

namespace App\Http\Controllers;

use App\Models\Disposisi;
use Illuminate\Http\Request;
use App\Http\Controllers\ViewController;
use App\Models\UserProfile;

class DisposisiController extends Controller
{

    protected $view;
    public function __construct(ViewController $view)
    {
        $this->view = $view;
    }
    public function index(){

        return view('disposisi');
    }

    public function store(Request $request)
    {
        if($request->hasFile('FileSurat'))
        {
            $file = $request->file('File');
            $file->store('public/files');
            $path = "files/" . $file->hashName();
        }
        Disposisi::create($request->all());
        return redirect('/listdisposisi');
    }

    public function destroy($id)
    {

        Disposisi::find($id)->delete();
        return redirect('/listdisposisi');
    }

    public function edit(int $id ,Request $request)
    {
        $user = Disposisi::find($id);
        $user->update($request->all());
        
        $adduser = $this->view->main();
        $profile = UserProfile::all();
        try{
            return view('editdisposisi', 
            [
                'tittle' => 'Edit Disposisi',
                'user' => $adduser->user,
                'date' => $adduser->date,
                'greetings' => $adduser->greetings,
                'data' => $user,
                'disposisi' => $profile
            ]);
        }catch (\Exception $e){
            throw new \Exception($e->getMessage());
    }
        return redirect('/suratmasuk');
    }
}
