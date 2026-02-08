<?php

namespace App\Repositories;

use App\Models\Media;

class MediaRepository
{
    public function tutti()
    {
        return Media::orderBy('ordine')->get();
    }

    public function crea(array $dati): Media
    {
        return Media::create($dati);
    }

    public function elimina(int $id): void
    {
        Media::findOrFail($id)->delete();
    }

    public function aggiornaOrdini(array $ordini): void
    {
        foreach ($ordini as $id => $ordine) {
            Media::where('id', $id)->update(['ordine' => $ordine]);
        }
    }
}
