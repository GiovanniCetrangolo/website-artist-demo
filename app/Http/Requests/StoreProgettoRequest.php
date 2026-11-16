<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProgettoRequest extends FormRequest
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
            'titolo' => ['required', 'string', 'max:255'],
            'descrizione' => ['nullable', 'string'],
            'immagine' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp,avif',
                'max:2048',
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'titolo.required' => 'Il titolo è obbligatorio.',
            'titolo.string' => 'Il titolo deve essere un testo.',
            'titolo.max' => 'Il titolo non può superare 255 caratteri.',

            'descrizione.string' => 'La descrizione deve essere un testo.',

            'immagine.image' => 'Il file caricato deve essere un\'immagine.',
            'immagine.mimes' => 'L\'immagine deve essere in formato JPG, JPEG, PNG, WEBP o AVIF.',
            'immagine.max' => 'L\'immagine non può superare i 2 MB.',
        ];
    }
}
