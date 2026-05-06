<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

class GenreController extends Controller
{
    public function show($genre)
    {
        $films = Film::where('genre', $genre)->get();

        return view('genre', compact('films', 'genre'));
    }
}