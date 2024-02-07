<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.guest.index',  compact('comics'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $comic = Comic::findOrFail($id);
        return view('comics.guest.show', compact('comic'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.guest.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formComicsData = $request->all();
        $newComic = new Comic();
        $newComic->title = $formComicsData['title'];
        $newComic->description = $formComicsData['description'];
        $newComic->img = $formComicsData['thumb'];
        $newComic->price = $formComicsData['price'];
        $newComic->series = $formComicsData['series'];
        $newComic->sale_date = $formComicsData['sale_date'];
        $newComic->type = $formComicsData['type'];
        $newComic->save();

        return redirect()->route('comics.guest.show', $newComic->id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.guest.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
