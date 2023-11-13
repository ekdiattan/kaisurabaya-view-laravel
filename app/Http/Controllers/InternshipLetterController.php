<?php

namespace App\Http\Controllers;

use App\Http\Requests\InternshipLetterRequest;
use Illuminate\Http\Request;
use App\Services\InternshipLetterService;

class InternshipLetterController extends Controller
{
    protected $service;

    public function __construct(InternshipLetterService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        try{
            $internshipLetter = $this->service->index();
        }catch (\Exception $e){ 
            throw new \Exception($e->getMessage());
        }
        return response($internshipLetter);
    }

    public function show($id)
    {
        try{
            $internshipLetter = $this->service->show($id);
        }catch (\Exception $e){
            throw new \Exception($e->getMessage());
        }
        return response($internshipLetter);
    }

    public function store(InternshipLetterRequest $request)
    {
        try{
            $internshipLetter = $this->service->store($request->all());
        }catch (\Exception $e){
            throw new \Exception($e->getMessage());
        }
        return response($internshipLetter);
    }

    public function update(Request $request, $id)
    {
        try{
            $internshipLetter = $this->service->update($request->all(), $id);
        }catch (\Exception $e){
            throw new \Exception($e->getMessage());
        }
        return response($internshipLetter);
    }

    public function destroy($id)
    {
        try{
            $internshipLetter = $this->service->destroy($id);
        }catch (\Exception $e){
            throw new \Exception($e->getMessage());
        }
        return response($internshipLetter);
    }
}
