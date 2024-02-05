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
        //     // per trovare un'unico elemento usiamo findOrFail se non lo trova riporta a Error 404
        $comic = Comic::findOrFail($id);
        return view('comics.guest.show', compact('comic'));
    }
    // in alternativa possiamo eseguire la findOrFair in questo modo e dalle route bisogna togliere {id} e sostiturilo con {comic}
    // public function show(Comic $comic)
    // {
    //     return view('comics.guest.show', compact('comic'));
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
