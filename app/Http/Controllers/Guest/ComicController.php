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
        // Dependency injection al posto di string id, inseriamo Comic $comic e possiamo evitare il findOrFail
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
        $newComic = Comic::create($formComicsData);

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
    // Dependency injection se come parametro, al posto dell'id aggiungiamo Comic $comic non c'e' bisogno della findOrFail
    public function update(Request $request, string $id)
    {
        $data = $request->all();

        $comic = Comic::findOrFail($id);
        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->img = $data['img'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];
        $comic->save();

        return redirect()->route('comics.guest.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
