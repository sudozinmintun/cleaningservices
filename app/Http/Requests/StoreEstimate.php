<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEstimate extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|digits_between:10,15',
            'p_type' => 'required',
            'no_bed_bath' => 'required',
            'f_type' => 'required',
            's_room' => 'required',
            'clean_service_period' => 'required',
            'pets' => 'required',
            'access' => 'required',
        ];
    }
}
