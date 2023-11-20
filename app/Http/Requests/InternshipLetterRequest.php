<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class InternshipLetterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'StudentName' => 'required',
            'OriginAgency' => 'required',
            'StartIntern' => 'required',
            'EndIntern' => 'required',
            'DocumentNumber' => 'unique:InternshipLetter,DocumentNumber',
        ];
    }

    public function prepareForValidation()
    {
        if (auth()->check()) {
            $this->merge([
                'InternshipLetterCreatedBy' => Auth::id(),
                'InternshipLetterUpdatedBy' => Auth::id(),
            ]);
        }
    }

}
