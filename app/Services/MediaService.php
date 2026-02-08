<?php

namespace App\Services;

use App\Repositories\MediaRepository;

class MediaService
{
    protected MediaRepository $repository;

    public function __construct(MediaRepository $repository)
    {
        $this->repository = $repository;
    }

    public function elenco()
    {
        return $this->repository->tutti();
    }

    public function aggiungi(array $dati, $file = null)
{
    if ($dati['tipo'] === 'foto' && $file) {
        $path = $file->store('media', 'public');
        $dati['percorso_foto'] = $path;
        $dati['youtube_id'] = null;
    }

    if ($dati['tipo'] === 'video') {
        $dati['percorso_foto'] = null;
    }

    return $this->repository->crea($dati);
}


    public function rimuovi(int $id): void
    {
        $this->repository->elimina($id);
    }

    public function riordina(array $ordini): void
    {
        $this->repository->aggiornaOrdini($ordini);
    }
}
