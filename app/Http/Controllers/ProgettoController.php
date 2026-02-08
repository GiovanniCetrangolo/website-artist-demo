<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProgettoService;

class ProgettoController extends Controller
{
    protected ProgettoService $service;

    public function __construct(ProgettoService $service)
    {
        $this->service = $service;
    }

    // cliente - lista
    public function pubblico()
    {
        $progetti = $this->service->elenco();
        return view('progetto.index', compact('progetti'));
    }


    // Admin - crea
  public function crea(Request $request)
{
    $dati = $request->validate([
        'titolo' => 'required|string|max:255',
        'descrizione' => 'nullable|string',
        'immagine' => 'nullable|mimes:jpg,jpeg,png,webp,avif|max:2048',
    ]);

    if ($request->hasFile('immagine')) {
        $dati['immagine'] = $request->file('immagine');
    }

    $this->service->crea($dati);

    return redirect()->back();
}


    // Admin - aggiorna
    public function aggiorna(Request $request, int $id)
    {
        $dati = $request->validate([
            'titolo' => 'required|string|max:255',
            'descrizione' => 'nullable|string',
        ]);

        $this->service->aggiorna($id, $dati);

        return redirect()->back();
    }

    // Admin - elimina
    public function distruggi(int $id)
    {
        $this->service->elimina($id);

        return redirect()->back();
    }
}