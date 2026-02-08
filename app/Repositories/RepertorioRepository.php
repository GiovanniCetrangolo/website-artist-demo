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

    public function aggiorna(int $id, array $dati)
    {
        return Repertorio::where('id', $id)->update($dati);
    }

    public function elimina(int $id)
    {
        return Repertorio::destroy($id);
    }
}
