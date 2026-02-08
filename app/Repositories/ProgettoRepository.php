<?php

namespace App\Repositories;

use App\Models\Progetto;

class ProgettoRepository
{
    public function tutti()
    {
        return Progetto::orderBy('id', 'desc')->get();
    }

    public function trova(int $id): Progetto
    {
        return Progetto::findOrFail($id);
    }

    public function crea(array $dati): Progetto
    {
        return Progetto::create($dati);
    }

    public function aggiorna(int $id, array $dati): Progetto
    {
        $progetto = $this->trova($id);
        $progetto->update($dati);

        return $progetto;
    }

    public function elimina(int $id): void
    {
        $this->trova($id)->delete();
    }
}
