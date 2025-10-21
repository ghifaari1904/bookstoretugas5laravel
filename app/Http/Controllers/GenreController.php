<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    // READ ALL
    public function index()
    {
        $genres = Genre::all();
        return response()->json($genres);
    }

    // CREATE
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $genre = Genre::create([
            'name' => $request->name
        ]);

        return response()->json([
            'message' => 'Genre created successfully',
            'data' => $genre
        ], 201);
    }
}
