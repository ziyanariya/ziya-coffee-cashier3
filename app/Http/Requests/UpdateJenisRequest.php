<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateJenisRequest extends FormRequest
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
            'nama_jenis' => 'required',
            'kategori_id' => 'required'
        ];
    }
    public function message()
    {
        return[
            'nama_jenis.required' => "Data Nama Jenis belum diisi",
            'kategori_id.required' => "Data Kategori id belum diisi"
        ];
    }
}
