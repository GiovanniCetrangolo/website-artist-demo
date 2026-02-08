<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RepertorioService;

class RepertorioController extends Controller
{
    protected RepertorioService $service;

    public function __construct(RepertorioService $service)
    {
        $this->service = $service;
    }

    // Lato pubblico: elenco diviso per genere
    public function pubblico()
    {
        $repertorio = $this->service->elenco()
            ->groupBy('genere');

        return view('repertorio.index', compact('repertorio'));
    }



    public function crea(Request $request)
    {
        $this->service->crea(
            $request->only(['titolo', 'genere', 'note', 'ordine_index'])
        );

        return redirect()->route('admin.repertorio.index');
    }

    public function aggiorna(Request $request, int $id)
    {
        $this->service->aggiorna(
            $id,
            $request->only(['titolo', 'genere', 'note', 'ordine_index'])
        );

        return redirect()->route('admin.repertorio.index');
    }

    public function distruggi(int $id)
    {
        $this->service->rimuovi($id);
        return redirect()->route('admin.repertorio.index');
    }
}