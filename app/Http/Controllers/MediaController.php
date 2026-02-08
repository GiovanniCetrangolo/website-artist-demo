<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MediaService;

class MediaController extends Controller
{
    protected MediaService $service;

    public function __construct(MediaService $service)
    {
        $this->service = $service;
    }

    // Lato utente
    public function pubblico()
    {
        $media = $this->service->elenco();
        return view('media.index', compact('media'));
    }


    //aggiunge nuovo media tramite repository
public function aggiungi(Request $request)
{
    $this->service->aggiungi(
        $request->all(),
        $request->file('file')
    );

     return redirect()->back()->with('success', 'Media creato');
}

//elimina media tramite repository
    public function distruggi(int $id)
    {
        $this->service->rimuovi($id);
        return redirect()->back()->with('success', 'Media eliminato');
    }

    //ordina media tramite repository
    public function ordina(Request $request)
    {
        // formato: [id => ordine, id => ordine]
        $this->service->riordina($request->input('ordini'));
        return redirect()->back()->with('success', 'Ordine aggiornato');
    }
}
