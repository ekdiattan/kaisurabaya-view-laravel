<?php

namespace App\Http\Controllers;


use App\Services\MailIncomingService;
use App\Http\Requests\MailIncomingRequest;
use App\Http\Requests\UpdateMailIncomingRequest;

class MailIncomingController extends Controller

{
    protected $mailIncomingService; 
    
    public function __construct(MailIncomingService $mailIncomingService)
    {
        $this->mailIncomingService = $mailIncomingService;
    }

    public function index()
    {
        try{
            $mailIncoming = $this->mailIncomingService->index();
        }
        catch(\Exception $e){
            return $this->sendError($e->getMessage());
        }
        return $this->successResponse($mailIncoming);
    }

    public function store(MailIncomingRequest $request)
    {
        try{
             $mailIncoming = $this->mailIncomingService->store($request->all());
        }
        catch(\Exception $e){
            return $this->sendError($e->getMessage());
        }
        return $this->successResponse($mailIncoming);
    }

    public function show($id)
    {
        try{
            $mailIncoming = $this->mailIncomingService->show($id);
        }
        catch(\Exception $e){
            return $this->sendError($e->getMessage());
        }
        return $this->successResponse($mailIncoming);
    }

    public function update($id, UpdateMailIncomingRequest $request)
    {
        try{
            $mailIncoming = $this->mailIncomingService->update($id, $request->all());
        }
        catch(\Exception $e){
            return $this->sendError($e->getMessage());
        }
        return $this->successResponse($mailIncoming);
    }

    public function destroy(int $id)
    {
        try{
            $mailIncoming = $this->mailIncomingService->destroy($id);
        }
        catch(\Exception $e){
            return $this->sendError($e->getMessage());
        }
        return $this->successResponse($mailIncoming);    
    }
}
