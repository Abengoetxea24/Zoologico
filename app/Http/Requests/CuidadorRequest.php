<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CuidadorRequest extends FormRequest
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
            'nombre' => 'required|string|max:255',
        'apellidos' => 'required|string|max:255',
        'telefono' => 'required|string|max:15',
        'email' => 'required|email|max:255',
        'especialidad' => 'required|string|max:255'
        ];
    }
}
