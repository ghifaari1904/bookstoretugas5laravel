<?php

namespace App\Http\Controllers;

use App\Models\Genre;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::getAllGenres();
        return view('genres.index', compact('genres'));
    }
}
