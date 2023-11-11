<?php


namespace App\Services;

use App\Models\MailIncoming;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

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

    public function store(array $data)
    
    {
        try{
            DB::beginTransaction();

            $dataId = [];

            foreach($data as $datas)
            {
                $createdData = MailIncoming::create($datas);
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
            $mailIncoming->delete();

    }catch(\Exception $e){
            DB::rollBack();
            throw new \Exception($e->getMessage());
    }
             DB::commit();
             return $mailIncoming;
    }
}
