<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InviaPrenotazioneRequest extends FormRequest
{
    public function authorize(): bool
    {
        // lato pubblico, nessuna autorizzazione speciale
        return true;
    }

    public function rules(): array
    {
        return [
            'nome'        => 'required|string|max:255',
            'email'       => 'required|email',
            'data_evento' => 'required|date',
            'messaggio'   => 'nullable|string',
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required'        => 'Il nome è obbligatorio',
            'email.required'       => 'L’email è obbligatoria',
            'email.email'          => 'Inserisci un’email valida',
            'data_evento.required' => 'La data dell’evento è obbligatoria',
            'data_evento.date'     => 'La data evento non è valida',
        ];
    }
}
