<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgettoController;

// Lato pubblico
Route::get('/progetto', 
[ProgettoController::class, 'pubblico'])
    ->name('progetto.index');

// Lato admin
Route::middleware('auth')
    
    ->prefix('admin')
    
    ->group(function () {

    Route::get('/progetto', 
    [ProgettoController::class, 'index'])
        ->name('admin.progetto.index');

    Route::post('/progetto', 
    [ProgettoController::class, 'crea'])
        ->name('admin.progetto.crea');

    Route::put('/progetto/{id}', [ProgettoController::class, 'aggiorna'])
        ->name('admin.progetto.aggiorna');

    Route::delete('/progetto/{id}', [ProgettoController::class, 'distruggi'])
        ->name('admin.progetto.distruggi');
});
