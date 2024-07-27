<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDataGuru extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nip' => 'required|unique:teachers',
            'nama' => 'required|min:5',
            'jabatan' => 'required',
            'nomor_handphone'=> 'required',
            'alamat' => 'nullable',
            'jumlah_ampuh' => 'required'
        ];
    }
}
