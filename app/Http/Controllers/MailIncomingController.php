<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MailIncomingService;

class MailIncomingController extends Controller

{
    protected $mailIncomingService; 
    
    public function __construct(MailIncomingService $mailIncomingService)
    {
        $this->mailIncomingService = $mailIncomingService;
    }

    public function index()
    {
        return $this->mailIncomingService->index();
    }

    public function store(Request $request)
    {
        try{
            return $this->mailIncomingService->store($request->all());
        }
        catch(\Exception $e)
        {
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function show($id)
    {
        return $this->mailIncomingService->show();
    }

    public function update(Request $request, $id)
    {
        return $this->mailIncomingService->update();
    }
    public function destroy($id)
    {
        return $this->mailIncomingService->destroy();
    }
}
