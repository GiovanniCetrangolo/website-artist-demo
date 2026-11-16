<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRepertorioRequest;
use App\Http\Requests\UpdateRepertorioRequest;
use App\Services\RepertorioService;

class RepertorioController extends Controller
{
    protected RepertorioService $service;

    public function __construct(RepertorioService $service)
    {
        $this->service = $service;
    }

    public function pubblico()
    {
        $repertorio = $this->service->elenco()
            ->groupBy('genere');

        return view('repertorio.index', compact('repertorio'));
    }

    public function crea(StoreRepertorioRequest $request)
    {
        $this->service->crea($request->validated());

        return redirect()->route('admin.gestione');
    }

    public function aggiorna(UpdateRepertorioRequest $request, int $id)
    {
        $this->service->aggiorna(
            $id,
            $request->validated()
        );

        return redirect()->route('admin.gestione');
    }

    public function distruggi(int $id)
    {
        $this->service->rimuovi($id);
        return redirect()->route('admin.gestione');
    }
}
