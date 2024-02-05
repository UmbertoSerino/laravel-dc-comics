<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $navBar = config('items-header.navbar');
        $dcComicsList = config('items-footer.dcComicsList');
        $shopList = config('shopList-footer.shopList');
        $dcList = config('dcList-footer.dcList');
        $sitesList = config('sitesList-footer.sitesList');
        $heroCards = config('herocards.heroCards');
        $comics = config('comics.comics');
        return view('comics.index',  compact('navBar', 'dcComicsList', 'shopList', 'dcList', 'sitesList', 'heroCards', 'comics'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return ('show' . $id);
    }

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
