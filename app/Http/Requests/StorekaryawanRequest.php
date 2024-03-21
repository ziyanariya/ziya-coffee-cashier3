<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorekaryawanRequest extends FormRequest
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
            'nip' => 'required',
            'nik' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'telepon' => 'required',
            'agama' => 'required',
            'status_nikah' => 'required',
            'alamat' => 'required',
            'foto' => 'required',
        ];
    }
    public function message()
    {
        return[
            'nip.required' => "Data nip belum diisi",
            'nik.required' => "Data nik belum disi",
            'nama.required' => "Data nama belum disi",
            'jenis_kelamin.required' => "Data jenis kelamin belum disi",
            'tempat_lahir.required' => "Data tempat lahir belum disi",
            'tanggal_lahir.required' => "Data tanggal lahir belum disi",
            'telepon.required' => "Data telepon belum disi",
            'agama.required' => "Data agama belum disi",
            'status_nikah.required' => "Data status nikah belum disi",
            'alamat.required' => "Data alamat belum disi",
            'foto.required' => "Data foto belum disi"
        ];
    }
}
