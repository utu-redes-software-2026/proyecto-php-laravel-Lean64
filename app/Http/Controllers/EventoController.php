<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function index()
    {
        $eventos = Evento::all();
        return view('eventos', compact('eventos'));
    }

    public function store(Request $request)
    {
        Evento::create([
            'nombre' => $request->evento
        ]);

        return redirect('/eventos');
    }
    public function destroy($id)
{
    $evento = Evento::findOrFail($id);
    $evento->delete();

    return redirect('/eventos');
}
}