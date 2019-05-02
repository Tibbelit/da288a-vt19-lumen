<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index() {
        $movies = Movie::all();
        return response()->json($movies);
    }

    public function show($id) {
        $movie = Movie::find($id);
        return response()->json($movie);
    }

    public function create(Request $request) {
        $movie = new Movie;
        $movie->title = $request->input("title");
        $movie->year = $request->input("year");
        $movie->poster = $request->input("poster");
        $movie->save();

        return response()->json($movie);
    }

    public function update(Request $request, $id) {
        $movie = Movie::find($id);
        $movie->title = $request->input("title");
        $movie->year = $request->input("year");
        $movie->poster = $request->input("poster");
        $movie->save();

        return response()->json($movie);
    }

    public function delete($id) {
        Movie::find($id)->delete();

        return response()->json([]);
    }
}
