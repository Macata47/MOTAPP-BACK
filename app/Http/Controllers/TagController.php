<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function index()
    {
        return Tag::all();
    }

    public function store(Request $request)
    {
        $tag = Tag::create($request->all());
        return response()->json($tag, 201);
    }

    public function show($id)
    {
        $tag = Tag::findOrFail($id);
        return response()->json($tag);
    }

    public function update(Request $request, $id)
    {
        $tag = Tag::findOrFail($id);
        $tag->update($request->all());
        return response()->json($tag, 200);
    }

    public function destroy($id)
    {
        Tag::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
