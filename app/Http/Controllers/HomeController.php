<?php

namespace App\Http\Controllers;

use App\Services\MediaService;

class HomeController extends Controller
{
    protected MediaService $mediaService;

    public function __construct(MediaService $mediaService)
    {
        $this->mediaService = $mediaService;
    }

    // mostra view  Homepage
    public function index()
    {
        // prendiamo i primi 3 media ordinati
        $media = $this->mediaService->elenco()->take(3);

        return view('homepage.index', [
            'media' => $media,
        ]);
    }
}
