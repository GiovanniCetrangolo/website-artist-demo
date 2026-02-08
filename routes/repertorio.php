<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RepertorioController;

// Lato pubblico
Route::get('/repertorio', 
[RepertorioController::class, 'pubblico'])
    ->name('repertorio.index');

// Lato admin
Route::middleware('auth')
    
    ->prefix('admin')
    
    ->group(function () {

    Route::get('/repertorio', 
        [RepertorioController::class, 'index'])
        ->name('admin.repertorio.index');

    Route::post('/repertorio', 
    [RepertorioController::class, 'crea'])
        ->name('admin.repertorio.crea');

    Route::put('/repertorio/{id}', 
    [RepertorioController::class, 'aggiorna'])
        ->name('admin.repertorio.aggiorna');

    Route::delete('/repertorio/{id}', 
    [RepertorioController::class, 'distruggi'])
        ->name('admin.repertorio.distruggi');
});
