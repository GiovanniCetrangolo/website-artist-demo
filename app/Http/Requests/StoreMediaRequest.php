<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMediaRequest extends FormRequest
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
            'tipo' => ['required', 'in:foto,video'],
            'file' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp,avif', 'max:2048'],
            'youtube_id' => ['nullable', 'string'],
            'ordine' => ['sometimes', 'integer', 'min:0'],
        ];
    }

    public function messages(): array
    {
        return [
            'tipo.required' => 'Il tipo di media è obbligatorio.',
            'tipo.in' => 'Il tipo di media deve essere foto oppure video.',

            'file.image' => 'Il file caricato deve essere un\'immagine.',
            'file.mimes' => 'L\'immagine deve essere in formato JPG, JPEG, PNG, WEBP o AVIF.',
            'file.max' => 'L\'immagine non può superare i 2 MB.',

            'youtube_id.string' => 'L\'ID YouTube deve essere un testo.',

            'ordine.integer' => 'L\'ordine deve essere un numero intero.',
            'ordine.min' => 'L\'ordine non può essere negativo.',
        ];
    }
}
