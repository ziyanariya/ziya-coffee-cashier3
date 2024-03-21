<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatestokRequest extends FormRequest
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
            'menu_id' => 'required',
            'jumlah' => 'required'
        ];
    }
    public function message()
    {
        return[
            'menu_id.required' => "Data menu id belum diisi",
            'jumlah.required' => "Data jumlah belum diisi",
        ];
    }
}
