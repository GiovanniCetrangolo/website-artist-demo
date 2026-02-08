<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
   
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        return [
            'email'    => ['required', 'email'],
            'password' => ['required', 'string'],
        ];
    }

    
    public function messages(): array
    {
        return [
            'email.required'    => 'L’email è obbligatoria.',
            'email.email'       => 'Inserisci un indirizzo email valido.',
            'password.required' => 'La password è obbligatoria.',
        ];
    }
}