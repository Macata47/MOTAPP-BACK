<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function index()
    {
        return Image::all();
    }

    public function store(Request $request)
    {
        $image = Image::create($request->all());
        return response()->json($image, 201);
    }

    public function show($id)
    {
        $image = Image::findOrFail($id);
        return response()->json($image);
    }

    public function update(Request $request, $id)
    {
        $image = Image::findOrFail($id);
        $image->update($request->all());
        return response()->json($image, 200);
    }

    public function destroy($id)
    {
        Image::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
