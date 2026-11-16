<?php

// App\Repositories\RepertorioRepository.php
namespace App\Repositories;

use App\Models\Repertorio;

class RepertorioRepository
{
    public function tutti()
    {
        return Repertorio::orderBy('genere')
            ->orderBy('ordine_index')
            ->get();
    }

    public function crea(array $dati)
    {
        return Repertorio::create($dati);
    }

    public function aggiorna(int $id, array $dati): Repertorio
    {
        $repertorio = Repertorio::findOrFail($id);
        $repertorio->update($dati);

        return $repertorio;
    }

    public function elimina(int $id): void
    {
        Repertorio::findOrFail($id)->delete();
    }
}
