<?php


namespace App\Services;

use App\Helpers\GeneratorHelper;
use App\Models\InternshipLetter;
use App\Models\MailOutput;
use Generator;
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
            
            $internshipLetter = InternshipLetter::with(['userprofile'])->find($id);

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

            $dataWithManagerId = array_merge($data, ['ManagerId' => 15]);
            $internshipLetter = InternshipLetter::create($dataWithManagerId);

            $generateCode = GeneratorHelper::create($internshipLetter);
            
            $mailOutput = MailOutput::create([
                'MailOutputIPId' => $internshipLetter->IntershipLetterId,
                'MailOutputCode' => $generateCode,
            ]);

        }catch(\Exception $e)
        {
            DB::rollBack();
            throw new \Exception($e->getMessage());
        }
            DB::commit();
            return $internshipLetter;
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
