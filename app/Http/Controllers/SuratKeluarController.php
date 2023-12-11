<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SuratKeluarController extends Controller
{
    public function store(Request $request)
    {
        DB::beginTransaction();
        try{
            $this->storeeksternalinternal($request);
        }catch (\Exception $e){
            DB::rollBack();
            throw new \Exception($e->getMessage());
        }
        DB::commit();
        return redirect('/suratkeluar');
    }

    public function storeeksternalinternal(Request $request)
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

            $input = $request->all();
            $success = SuratKeluar::create($input);

            // Generate Code
            $flippedRoman = array_flip($roman); 
            $bulanRomawi = $flippedRoman[$date];
            $code = "KA." . "SK" . "/" . $bulanRomawi . "/" . $success->SuratKeluarId . "/" . date('Y');

            // Update Code
            $suratKeluar = SuratKeluar::find($success->SuratKeluarId);
            $suratKeluar->update([
                'SuratGenerate' => $code,
            ]);

        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    public function destroy($id)
    {

        SuratKeluar::find($id)->delete();
        return redirect('/suratkeluar');
    }
}
