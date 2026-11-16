<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrenotazioneController;

// pubblico
Route::get('/prenota', [PrenotazioneController::class, 'prenota'])
    ->name('prenotazioni.prenota');

Route::post('/prenota', [PrenotazioneController::class, 'invia'])
    ->name('prenotazioni.invia');

//Lato Admin
Route::middleware('auth')
    ->prefix('admin')
    
    ->group(function () {
    
    Route::get('/prenotazioni', [PrenotazioneController::class, 'elenco'])
    ->name('prenotazioni.elenco');

Route::delete('prenotazioni/{id}', [PrenotazioneController::class, 'elimina'])
    ->name('prenotazioni.elimina');
    }
    );
