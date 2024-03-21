<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProdukTitipanRequest extends FormRequest
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
            'nama_produk' => 'required',
            'nama_supplier' => 'required',
            'harga_beli' => 'required',
            'harga_jual' => 'required',
            'stok' => 'required',
            'keterangan' => 'required',
        ];
    }
    public function message()
    {
        return[
            'nama_produk.required' => "Data nama produk diisi",
            'nama_supplier.required' => "Data nama supplier belum diisi",
            'harga_beli.required' => "Data harga beli belum diisi",
            'harga_jual.required' => "Data harga jual belum diisi",
            'stok.required' => "Data stok belum diisi",
            'keterangan.required' => "Data keterangan belum diisi",
        ];
    }

}
