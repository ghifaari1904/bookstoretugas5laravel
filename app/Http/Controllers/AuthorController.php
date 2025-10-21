<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    // READ ALL
    public function index()
    {
        $authors = Author::all();
        return response()->json($authors);
    }

    // CREATE
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:authors,email'
        ]);

        $author = Author::create([
            'name' => $request->name,
            'email' => $request->email
        ]);

        return response()->json([
            'message' => 'Author created successfully',
            'data' => $author
        ], 201);
    }
}
