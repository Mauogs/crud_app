<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarroRequest extends FormRequest
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
            'Modelo' => 'string|max:50',
            'Marca' => 'string|max:30',
            'Ano' => 'integer|min:2000|max:2026',
            'DataCad' => 'dateTime',
            'Foto' => 'string|max:30'
        ];
    }
}