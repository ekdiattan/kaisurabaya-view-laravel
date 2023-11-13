<?php


namespace App\Services;

use App\Models\InternshipLetter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class InternshipLetterService
{

    public function index()
    {
        try{
            DB::beginTransaction();
            
            $internshipLetter = InternshipLetter::all();
        }catch(\Exception $e){
            DB::rollBack();
                throw new \Exception($e->getMessage());
        }
            DB::commit();
            return $internshipLetter;
    }

    public function show($id)
    {
        try{
            DB::beginTransaction();
            
            $internshipLetter = InternshipLetter::find($id);

        }catch(\Exception $e){
            DB::rollBack();
            throw new \Exception($e->getMessage());
        }
             DB::commit();
             return $internshipLetter;
    }

    public function store(array $data)
    
    {
        try{
            DB::beginTransaction();

            $dataId = [];
            
            foreach($data as $datas)
            {
                $createdData = InternshipLetter::create(array_merge(
                    $datas, [
                    'InternshipLetterCreatedBy' => Auth::id(),
                    'InternshipLetterUpdatedBy' => Auth::id(),
                ]));
                $dataId[] = $createdData;
            }               
        }catch(\Exception $e)
        {
            DB::rollBack();
            throw new \Exception($e->getMessage());
        }
            DB::commit();
            return $dataId;
    }

    public function update($id, array $data)
    {
        try{
            DB::beginTransaction();

                $internshipLetter = InternshipLetter::find($id);
                $internshipLetter->update($data);

        }catch(\Exception $e){
            DB::rollBack();
            throw new \Exception($e->getMessage());

        }
             DB::commit();
             return $internshipLetter;
    }

    public function destroy(int $id)
    {
        try{
            DB::beginTransaction();
            
            $internshipLetter = InternshipLetter::find($id);
            $internshipLetter->delete();

    }catch(\Exception $e){
            DB::rollBack();
            throw new \Exception($e->getMessage());
    }
             DB::commit();
             return $internshipLetter;
    }
}
