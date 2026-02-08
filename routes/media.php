<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MediaController;

//mostra media lato utente
Route::get('/media', 
[MediaController::class, 'pubblico'])
    ->name('media.pubblico');

//gruppo rotte admin media
    Route::middleware('auth')
    
    ->prefix('admin')
    
    ->group(function () {

    //view principale lato admin gestione media 
    Route::get('/media', 
    [MediaController::class, 'index'])
        ->name('admin.media.index');
    
    //rotta per aggiungere nuovo media    
    Route::post('/media', 
    [MediaController::class, 'aggiungi'])
        ->name('admin.media.aggiungi');
    
    //rotta elimina media tramite id    
    Route::delete('/media/{id}', 
    [MediaController::class, 'distruggi'])
        ->name('admin.media.distruggi');

    //rotta per ordinare media tramite ordine    
    Route::post('/media/ordina',
     [MediaController::class, 'ordina'])
        ->name('admin.media.ordina');

});