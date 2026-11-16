<?php

namespace App\Services;

use App\Repositories\PrenotazioneRepository;
use App\Mail\RichiestaPrenotazioneMail;
use Illuminate\Support\Facades\Mail;
use App\Models\RichiestaPrenotazione;

class PrenotazioneService
{
    protected PrenotazioneRepository $repository;

    public function __construct(PrenotazioneRepository $repository)
    {
        $this->repository = $repository;
    }

    public function creaRichiesta(array $dati): RichiestaPrenotazione
    {
        $prenotazione = $this->repository->crea($dati);

        $destinatario = env('EMAIL_VIOLINISTA', 'default@example.com');

        Mail::to($destinatario)
            ->send(new RichiestaPrenotazioneMail($prenotazione));

        return $prenotazione;
    }

    public function elencoRichieste()
    {
        return $this->repository->elenco();
    }

    public function eliminaRichiesta(int $id): void
    {
        $this->repository->elimina($id);
    }
}
