<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProgettoRequest;
use App\Http\Requests\UpdateProgettoRequest;
use App\Services\ProgettoService;

class ProgettoController extends Controller
{
    protected ProgettoService $service;

    public function __construct(ProgettoService $service)
    {
        $this->service = $service;
    }

    public function pubblico()
    {
        $progetti = $this->service->elenco();
        return view('progetto.index', compact('progetti'));
    }

    public function crea(StoreProgettoRequest $request)
    {
        $dati = $request->validated();

        if ($request->hasFile('immagine')) {
            $dati['immagine'] = $request->file('immagine');
        }

        $this->service->crea($dati);

        return redirect()->back();
    }

    public function aggiorna(UpdateProgettoRequest $request, int $id)
    {
        $dati = $request->validated();

        if ($request->hasFile('immagine')) {
            $dati['immagine'] = $request->file('immagine');
        }

        $this->service->aggiorna($id, $dati);

        return redirect()->back();
    }

    public function distruggi(int $id)
    {
        $this->service->elimina($id);

        return redirect()->back();
    }
}
