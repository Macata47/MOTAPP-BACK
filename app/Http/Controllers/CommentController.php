<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index()
    {
        return Comment::all();
    }

    public function store(Request $request)
    {
        $comment = Comment::create($request->all());
        return response()->json($comment, 201);
    }

    public function show($id)
    {
        $comment = Comment::findOrFail($id);
        return response()->json($comment);
    }

    public function update(Request $request, $id)
    {
        $comment = Comment::findOrFail($id);
        $comment->update($request->all());
        return response()->json($comment, 200);
    }

    public function destroy($id)
    {
        Comment::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
