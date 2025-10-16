<?php

namespace App\Http\Controllers;

use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::with('books')->get();

        return response()->json([
            'status' => 'success',
            'data' => $authors
        ], 200);
    }

    public function show($id)
    {
        $author = Author::with('books')->find($id);

        if (! $author) {
            return response()->json([
                'status' => 'error',
                'message' => "Author with id {$id} not found"
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $author
        ], 200);
    }
}
