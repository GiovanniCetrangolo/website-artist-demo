<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLogin'])
->name('show-login');

Route::post('/login', [AuthController::class, 'login' ])
->name('login');

Route::post('/logout', [AuthController::class, 'logout'])
->name('logout');