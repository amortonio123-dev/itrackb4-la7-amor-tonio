<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    private function getAllMovies()
    {
        return [
            1 => ['id' => 1, 'title' => 'The House of Us', 'genre' => 'Romance / Drama'],
            2 => ['id' => 2, 'title' => 'Hello, Love, Again', 'genre' => 'Romance'],
            3 => ['id' => 3, 'title' => 'Avengers: The Way Home', 'genre' => 'Action'],
            4 => ['id' => 4, 'title' => 'Barbie', 'genre' => 'Comedy / Self-help'],
            5 => ['id' => 5, 'title' => 'Four Sisters and a Wedding', 'genre' => 'Drama'],
            6 => ['id' => 6, 'title' => 'Everything Everywhere All at Once', 'genre' => 'Sci-Fi'],
        ];
    }

    public function index(Request $request)
    {
        $genre = $request->query('genre');
        $search = $request->query('search');

        $movies = $this->getAllMovies();

        if ($genre) {
            $movies = array_filter($movies, fn($m) => $m['genre'] === $genre);
        }

        if ($search) {
            $movies = array_filter($movies, fn($m) => stripos($m['title'], $search) !== false);
        }

        return view('movies.index', compact('movies', 'genre', 'search'));
    }

    public function show($id)
    {
        $movies = $this->getAllMovies();
        
        if (!isset($movies[$id])) {
            abort(404);
        }

        $movie = $movies[$id];
        return view('movies.show', compact('movie'));
    }
}