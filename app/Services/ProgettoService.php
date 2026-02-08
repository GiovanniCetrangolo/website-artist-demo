<?php

namespace App\Services;

use App\Repositories\ProgettoRepository;

class ProgettoService
{
    protected ProgettoRepository $repository;

    public function __construct(ProgettoRepository $repository)
    {
        $this->repository = $repository;
    }

    public function elenco()
    {
        return $this->repository->tutti();
    }

    public function crea(array $dati)
    {
        // Se esiste un file immagine, lo salviamo nello storage
        if (isset($dati['immagine']) && $dati['immagine']) {
            $path = $dati['immagine']->store('progetti', 'public');
            $dati['immagine'] = $path;
        }

        return $this->repository->crea($dati);
    }

    public function aggiorna(int $id, array $dati)
    {
        if (isset($dati['immagine']) && $dati['immagine']) {
            $path = $dati['immagine']->store('progetti', 'public');
            $dati['immagine'] = $path;
        }

        return $this->repository->aggiorna($id, $dati);
    }

    public function elimina(int $id): void
    {
        $this->repository->elimina($id);
    }
}
