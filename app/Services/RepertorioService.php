<?php

// App\Services\RepertorioService.php
namespace App\Services;

use App\Repositories\RepertorioRepository;

class RepertorioService
{
    protected RepertorioRepository $repository;

    public function __construct(RepertorioRepository $repository)
    {
        $this->repository = $repository;
    }

    // Restituisce tutti i brani ordinati
    public function elenco()
    {
        return $this->repository->tutti();
    }

    public function crea(array $dati)
    {
        if (isset($dati['immagine'])) {
    $path = $dati['immagine']->store('progetti', 'public');
    $dati['immagine'] = $path;
}

        return $this->repository->crea($dati);
    }

    public function aggiorna(int $id, array $dati)
    {
        return $this->repository->aggiorna($id, $dati);
    }

    public function rimuovi(int $id)
    {
        $this->repository->elimina($id);
    }
}
