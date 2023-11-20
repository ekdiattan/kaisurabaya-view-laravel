<?php

namespace App\Http\Controllers;

use App\Models\MailOutput;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailOutputController extends Controller
{
    public function index()
    {
        try{
            $mailOutput = MailOutput::all();
        }catch (\Exception $e){ 
            throw new \Exception($e->getMessage());
        }
        return $this->successResponse($mailOutput);
    }

    public function show(int $id)
    {
        try{
            $mailOutput = MailOutput::find($id);
        }catch (\Exception $e){ 
            throw new \Exception($e->getMessage());
        }
        return $this->successResponse($mailOutput);
    }

    public function update(int $id)
    {
        try{
            $mailOutput = MailOutput::find($id);
            $mailOutput->update();
        }catch(\Exception $e){
            throw new \Exception($e->getMessage());
        }
        return $this->successResponse($mailOutput);
    }

    public function destroy(int $id){
        try{
            $mailOutput = MailOutput::find($id);
            $mailOutput->delete();
        }catch (\Exception $e){
            throw new \Exception($e->getMessage());
        }
        return $this->successResponse($mailOutput);
    }
}
