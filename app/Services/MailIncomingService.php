<?php


namespace App\Services;

use Illuminate\Support\Arr;
use App\Models\MailIncoming;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MailIncomingService
{

    public function index()
    {
        try{
            DB::beginTransaction();
            
            $mailIncoming = MailIncoming::all();
        }catch(\Exception $e){
            DB::rollBack();
                throw new \Exception($e->getMessage());
        }
            DB::commit();
            return $mailIncoming;
    }

    public function show($id)
    {
        try{
            DB::beginTransaction();
            
            $mailIncoming = MailIncoming::find($id);

        }catch(\Exception $e){
            DB::rollBack();
            throw new \Exception($e->getMessage());
        }
             DB::commit();
             return $mailIncoming;
    }

    public function generateCode()
    {
        $Id = MailIncoming::max('MailIncomingId')+1;
    
        $year = date('Y');
        $total = "KE.".$Id."/"."VII"."/"."KA-".$year;
        
        return $total;

    }

    public function store(array $data)
    
    {
        try{
            DB::beginTransaction();

            $dataId = [];
            $generatecode = $this->generateCode();
            dd($generatecode);
            foreach($data as $datas)
            {
                $createdData = MailIncoming::create([
                    'MailIncomingNumber' => $generatecode,
                    'MailIncomingRegarding' => $datas['MailIncomingRegarding'],
                    'MailIncomingType' => $datas['MailIncomingType'],
                    'MailIncomingCreatedBy' => Auth::id(),
                    'MailIncomingUpdatedBy' => Auth::id(),
                ]);
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

                $mailIncoming = MailIncoming::find($id);
                $mailIncoming->update($data);

        }catch(\Exception $e){
            DB::rollBack();
            throw new \Exception($e->getMessage());

        }
             DB::commit();
             return $mailIncoming;
    }

    public function destroy(int $id)
    {
        try{
            DB::beginTransaction();
            
            $mailIncoming = MailIncoming::find($id);

            $updateData = [
                'MailIncomingDeletedBy' => Auth::id(),
            ];
            $mailIncoming->update($updateData);

            $mailIncoming->delete();

    }catch(\Exception $e){
            DB::rollBack();
            throw new \Exception($e->getMessage());
    }
             DB::commit();
             return $mailIncoming;
    }
}
