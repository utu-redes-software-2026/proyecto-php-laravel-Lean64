<?php

use App\Http\Controllers\EventoController;

Route::get('/eventos', [EventoController::class, 'index']);
Route::post('/eventos', [EventoController::class, 'store']);
