<?php

namespace App\Services;

use App\Models\Progetto;
use App\Repositories\ProgettoRepository;
use Illuminate\Support\Facades\Storage;

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

    public function crea(array $dati): Progetto
    {
        if (isset($dati['immagine'])) {
            $dati['immagine'] = $dati['immagine']
                ->store('progetti', 'public');
        }

        return $this->repository->crea($dati);
    }

    public function aggiorna(int $id, array $dati): Progetto
    {
        $progetto = $this->repository->trova($id);

        if (isset($dati['immagine'])) {
            $vecchiaImmagine = $progetto->immagine;

            $dati['immagine'] = $dati['immagine']
                ->store('progetti', 'public');

            $progettoAggiornato = $this->repository->aggiorna($id, $dati);

            if ($vecchiaImmagine) {
                Storage::disk('public')->delete($vecchiaImmagine);
            }

            return $progettoAggiornato;
        }

        return $this->repository->aggiorna($id, $dati);
    }

    public function elimina(int $id): void
    {
        $progetto = $this->repository->trova($id);

        $this->repository->elimina($id);

        if ($progetto->immagine) {
            Storage::disk('public')->delete($progetto->immagine);
        }
    }
}
