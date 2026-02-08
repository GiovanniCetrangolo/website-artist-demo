<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


//rotta per mostrare homepage
Route::get('/homepage', 
[HomeController::class, 'index'])->name('home');
