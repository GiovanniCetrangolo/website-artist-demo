<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRepertorioRequest extends FormRequest
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
            'genere' => ['nullable', 'string', 'max:255'],
            'note' => ['nullable', 'string'],
            'ordine_index' => ['sometimes', 'integer', 'min:0'],
        ];
    }

    public function messages(): array
    {
        return [
            'titolo.required' => 'Il titolo è obbligatorio.',
            'titolo.string' => 'Il titolo deve essere un testo.',
            'titolo.max' => 'Il titolo non può superare 255 caratteri.',

            'genere.string' => 'Il genere musicale deve essere un testo.',
            'genere.max' => 'Il genere musicale non può superare 255 caratteri.',

            'note.string' => 'Le note devono essere un testo.',

            'ordine_index.integer' => 'L\'ordine deve essere un numero intero.',
            'ordine_index.min' => 'L\'ordine non può essere negativo.',
        ];
    }
}
