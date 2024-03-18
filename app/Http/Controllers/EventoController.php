<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class EventoController extends Controller
{
    public function index()
    {
        return Evento::all();
    }

    public function store(Request $request)
    {
        $evento = Evento::create($request->all());
        return response()->json($evento, 201);
    }

    public function show($id)
    {
        $evento = Evento::findOrFail($id);
        return response()->json($evento);
    }

    public function update(Request $request, $id)
    {
        $evento = Evento::findOrFail($id);
        $evento->update($request->all());
        return response()->json($evento, 200);
    }

    public function destroy($id)
    {
        Evento::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
