<?php

namespace App\Services;

use App\Repositories\RepertorioRepository;

class RepertorioService
{
    protected RepertorioRepository $repository;

    public function __construct(RepertorioRepository $repository)
    {
        $this->repository = $repository;
    }

    public function elenco()
    {
        return $this->repository->tutti();
    }

    public function crea(array $dati)
    {
        return $this->repository->crea($dati);
    }

    public function aggiorna(int $id, array $dati)
    {
        return $this->repository->aggiorna($id, $dati);
    }

    public function rimuovi(int $id): void
    {
        $this->repository->elimina($id);
    }
}
