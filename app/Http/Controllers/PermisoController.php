<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permiso;

class PermisoController extends Controller
{
    public function index()
    {
        return Permiso::all();
    }

    public function store(Request $request)
    {
        $permiso = Permiso::create($request->all());
        return response()->json($permiso, 201);
    }

    public function show($id)
    {
        $permiso = Permiso::findOrFail($id);
        return response()->json($permiso);
    }

    public function update(Request $request, $id)
    {
        $permiso = Permiso::findOrFail($id);
        $permiso->update($request->all());
        return response()->json($permiso, 200);
    }

    public function destroy($id)
    {
        Permiso::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
