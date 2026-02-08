<?php

namespace App\Http\Controllers;

use App\Services\PrenotazioneService;
use App\Http\Requests\InviaPrenotazioneRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\RichiestaPrenotazioneMail;
use App\Models\RichiestaPrenotazione;

class PrenotazioneController extends Controller
{
    protected PrenotazioneService $service;

    public function __construct(PrenotazioneService $service)
    {
        $this->service = $service;
    }

    // mostra pagina prenota
    public function prenota()
    {
        return view('prenotazioni.prenota');
    }

    // invia richiesta di prenotazione
   public function invia(InviaPrenotazioneRequest $request)
{
    // Salva la prenotazione e invia la mail dal service
    $this->service->creaRichiesta($request->validated());

    // Torna indietro con messaggio di successo
    return back()->with('success', 'Richiesta inviata correttamente');
}

    // elenco prenotazioni (admin)
    public function elenco()
    {
        $prenotazioni = $this->service->elencoRichieste();
        return view('admin.prenotazioni.index', compact('prenotazioni'));
    }

    // elimina prenotazione (admin)
    public function elimina(int $id)
    {
        $this->service->eliminaRichiesta($id);
        return back()->with('success', 'Prenotazione eliminata');
    }
}
