<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Role;
use App\Models\SuratMasuk;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF as PDF;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ViewController;

class SuratMasukController extends Controller
{
    protected $view;
    public function __construct(ViewController $view)
    {
        $this->view = $view;
    }
    
    public function storeeksternalinternal(Request $request, $id)
    {
        try {
            $date = date('m');
            $roman = [
                'I' => 1,
                'II' => 2,
                'III' => 3,
                'IV' => 4,
                'V' => 5,
                'VI' => 6,
                'VII' => 7,
                'VIII' => 8,
                'IX' => 9,
                'X' => 10,
                'XI' => 11,
                'XII' => 12
            ];

            $path = null; // or any default value

            if ($request->hasFile('FileSurat')) {
                $file = $request->file('FileSurat');
                $path = $file->store('public/file');
                $originalName = $file->getClientOriginalName();
                
                $input = $request->except('FileSurat');
                $input['FileSurat'] = $path;
                $input['FileSuratAsli'] = $originalName;
            
                $success = SuratMasuk::create($input);
            } else {
                $input = $request->except('FileSurat');
                $success = SuratMasuk::create($input);
            }
            

            // Generate Code
            $flippedRoman = array_flip($roman); 
            $bulanRomawi = $flippedRoman[$date];
            $code = "KA." . "SM" . "/" . $bulanRomawi . "/" . $success->SuratMasukId . "/" . date('Y');

            // Update Code
            $suratMasuk = SuratMasuk::find($success['SuratMasukId']);

            $suratMasuk->update([
                'SuratGenerate' => $code,
                'JenisSurat' => $id
            ]);

        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    public function storeeksternal(Request $request)
    {        
        try{
            $id = 1;
            $this->storeeksternalinternal($request, $id);
            return redirect('/suratmasuk');

        }catch (\Exception $e){
            throw new \Exception($e->getMessage());
        }
    }

    public function storeinternal(Request $request)
    {
        try{
            $id = 2;
            $this->storeeksternalinternal($request, $id);
            return redirect('/suratmasuk');

        }catch (\Exception $e){
            throw new \Exception($e->getMessage());
        }
    }

    public function destroy(int $id)
        {
            try{
                DB::beginTransaction();
                
                $user = SuratMasuk::find($id);
                $user->delete();
                
            }catch (\Exception $e){
                DB::rollBack();
                throw new Exception($e->getMessage());
            }
                DB::commit();
                return redirect('/suratmasuk');
        }

        public function edit(int $id ,Request $request)
        {
            $user = SuratMasuk::find($id);
        
            if ($request->hasFile('FileSurat')) {
                $file = $request->file('FileSurat');
                $path = $file->store('public/files');
                $path = str_replace('public/', '', $path);

                $originalName = $file->getClientOriginalName();
        
                $user->update([
                    'FileSurat' => $path,
                    'FileSuratAsli' => $originalName
                ]);
            }
        
            // Update input lainnya kecuali FileSurat
            $input = $request->except('FileSurat');
            $user->update($input);
        
            $adduser = $this->view->main();
            $role = Role::all();
            try {
                return view('editsuratmasuk', [
                    'tittle' => 'Edit Surat Masuk',
                    'user' => $adduser->user,
                    'date' => $adduser->date,
                    'greetings' => $adduser->greetings,
                    'data' => $user,
                    'role' => $role
                ]);
            } catch (\Exception $e) {
                throw new \Exception($e->getMessage());
            }
            return redirect('/suratmasuk');
        }

        public function download($id)
        {
            $suratMasuk = SuratMasuk::find($id);
            $filePath = storage_path('app/public/' . $suratMasuk->FileSurat);
            return response()->download($filePath);
        }

        public function generatePDF(int $id)
        {
            try {
                $surat = SuratMasuk::find($id);

                $data = [
                    'surat' => $surat
                ];

                $pdf = app('dompdf.wrapper')->loadView('PDF/SuratMasukPDF', $data);
                return $pdf->download('itsolutionstuff.pdf');

            } catch (\Exception $e) {
                throw new \Exception($e->getMessage());
            }
        }
}   
