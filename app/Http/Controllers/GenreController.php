<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        return response()->json([
            'success' => true,
            'message' => 'All genres retrieved successfully',
            'data' => $genres
        ], 200);
    }

    public function show($id)
    {
        $genre = Genre::find($id);
        if (!$genre) {
            return response()->json([
                'success' => false,
                'message' => 'Genre not found'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Genre retrieved successfully',
            'data' => $genre
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $genre = Genre::create(['name' => $request->name]);

        return response()->json([
            'success' => true,
            'message' => 'Genre created successfully',
            'data' => $genre
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $genre = Genre::find($id);
        if (!$genre) {
            return response()->json([
                'success' => false,
                'message' => 'Genre not found'
            ], 404);
        }

        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $genre->update(['name' => $request->name]);

        return response()->json([
            'success' => true,
            'message' => 'Genre updated successfully',
            'data' => $genre
        ], 200);
    }

    public function destroy($id)
    {
        $genre = Genre::find($id);
        if (!$genre) {
            return response()->json([
                'success' => false,
                'message' => 'Genre not found'
            ], 404);
        }

        $genre->delete();

        return response()->json([
            'success' => true,
            'message' => 'Genre deleted successfully'
        ], 200);
    }
}
