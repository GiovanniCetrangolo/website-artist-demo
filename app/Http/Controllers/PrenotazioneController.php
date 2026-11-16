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

    public function prenota()
    {
        return view('prenotazioni.prenota');
    }

    public function invia(InviaPrenotazioneRequest $request)
    {
        $this->service->creaRichiesta($request->validated());

        return back()->with('success', 'Richiesta inviata correttamente');
    }

    public function elenco()
    {
        $prenotazioni = $this->service->elencoRichieste();
        return view('admin.prenotazioni.index', compact('prenotazioni'));
    }

    public function elimina(int $id)
    {
        $this->service->eliminaRichiesta($id);
        return back()->with('success', 'Prenotazione eliminata');
    }
}
