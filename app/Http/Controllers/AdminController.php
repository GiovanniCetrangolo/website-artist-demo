<?php

namespace App\Http\Controllers;

use App\Services\ProgettoService;
use App\Services\RepertorioService;
use App\Services\MediaService;
use App\Services\PrenotazioneService; 

class AdminController extends Controller
{
    protected ProgettoService $progetti;
    protected RepertorioService $repertorio;
    protected MediaService $media;
    protected PrenotazioneService $prenotazioni; 

    public function __construct(
        ProgettoService $progetti,
        RepertorioService $repertorio,
        MediaService $media,
        PrenotazioneService $prenotazioni 
    ) {
        $this->progetti = $progetti;
        $this->repertorio = $repertorio;
        $this->media = $media;
        $this->prenotazioni = $prenotazioni; 
    }

    public function index()
    {
        return view('admin.gestione', [
            'progetti'      => $this->progetti->elenco(),
            'repertorio'    => $this->repertorio->elenco(),
            'media'         => $this->media->elenco(),
            'prenotazioni'  => $this->prenotazioni->elencoRichieste(), 
        ]);
    }
}
