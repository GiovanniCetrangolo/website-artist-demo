<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreMediaRequest;
use App\Services\MediaService;

class MediaController extends Controller
{
    protected MediaService $service;

    public function __construct(MediaService $service)
    {
        $this->service = $service;
    }

    public function pubblico()
    {
        $media = $this->service->elenco();
        return view('media.index', compact('media'));
    }

    public function aggiungi(StoreMediaRequest $request)
    {
        $this->service->aggiungi(
            $request->validated(),
            $request->file('file')
        );

        return redirect()->back()->with('success', 'Media creato');
    }

    public function distruggi(int $id)
    {
        $this->service->rimuovi($id);
        return redirect()->back()->with('success', 'Media eliminato');
    }

    public function ordina(Request $request)
    {
        $this->service->riordina($request->input('ordini'));
        return redirect()->back()->with('success', 'Ordine aggiornato');
    }
}
