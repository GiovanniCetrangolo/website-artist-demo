<?php

namespace App\Repositories;

use App\Models\RichiestaPrenotazione;

class PrenotazioneRepository
{
    public function crea(array $dati): RichiestaPrenotazione
    {
        return RichiestaPrenotazione::create($dati);
    }

    public function elenco()
    {
        return RichiestaPrenotazione::latest()->get();
    }

    public function elimina(int $id): void
    {
        RichiestaPrenotazione::findOrFail($id)->delete();
    }
}
