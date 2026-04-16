<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventoController extends Controller
{
  public function index()
{
    $eventos = [
        "Clase de Laravel",
        "Entrega de proyecto",
        "Reunión de equipo"
    ];

    return view('eventos', compact('eventos'));
}
}
