<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;

Route::get('/eventos', [EventoController::class, 'index']);
Route::get('/', function () {
    return view('bienvenido');
});
