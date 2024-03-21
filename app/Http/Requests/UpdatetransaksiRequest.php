<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatetransaksiRequest extends FormRequest
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
            'tanggal' => 'required',
            'total_harga' => 'required',
            'metode_pembayaran' => 'required',
            'keterangan' => 'required',
        ];

    }
    public function message()
    {
        return[
            'tanggal.required' => "Data tanggal belum diisi",
            'total_harga.required' => "Data total harga belum diisi",
            'metodea_pembayaran.required' => "Data total harga belum diisi",
            'keterangan.required' => "Data total harga belum diisi",
        ];
    }
}
