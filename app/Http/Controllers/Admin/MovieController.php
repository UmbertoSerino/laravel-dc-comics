<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all();
        return view('movies.guest.index',  compact('movies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formMoviesData = $request->all();
        $newMovie = new Movie();
        $newMovie->title = $formMoviesData['title'];
        $newMovie->img = $formMoviesData['img'];
        $newMovie->price = $formMoviesData['price'];
        $newMovie->year = $formMoviesData['year'];
        $newMovie->time = $formMoviesData['time'];
        $newMovie->description = $formMoviesData['description'];
        $newMovie->director = $formMoviesData['director'];
        $newMovie->save();

        return redirect()->route('movies.guest.show', $newMovie->id);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('movies.guest.create');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $movie = Movie::findOrFail($id);
        return view('movies.guest.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
