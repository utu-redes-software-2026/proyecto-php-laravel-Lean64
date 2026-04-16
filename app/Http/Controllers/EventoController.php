<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventoController extends Controller
{
    private $eventos = [];

    public function index()
    {
        return view('eventos', ['eventos' => $this->eventos]);
    }

    public function store(Request $request)
    {
        $evento = $request->input('evento');

        $this->eventos[] = $evento;

        return redirect('/eventos');
    }
}
