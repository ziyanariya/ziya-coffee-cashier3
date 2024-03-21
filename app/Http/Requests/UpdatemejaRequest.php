<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatemejaRequest extends FormRequest
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
            'nomor_meja' => 'required',
            'kapasitas' => 'required',
            'status' => 'required',
        ];
    }
    public function message()
    {
        return[
            'nomor_meja.required' => "Data Nomor Meja belum diisi",
            'kapasitas.required' => "Data kapasitas belum disi",
            'status.required' => "Data status belum disi"
        ];
    }
}
