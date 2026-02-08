<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

use Illuminate\Support\Facades\Auth;

Route::get('/logout-test', function() {
    Auth::logout();
    return redirect('/login');
});


Route::middleware('auth')
    
    ->prefix('admin')
    
    ->group(function () {
    Route::get('/', [AdminController::class, 'index'])
        ->name('admin.gestione');
});

// rotte media
require __DIR__.'/media.php';

// rotte homepage
require __DIR__.'/home.php';

//rotte progetto
require __DIR__ . '/progetto.php';

//rotte repertorio
require __DIR__ . '/repertorio.php';

//rotte prenotazioni
require __DIR__ . '/prenotazione.php';

//rotte login
require __DIR__. '/login.php';
