<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\ComicController as GuestComicController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $navBar = config('items-header.navbar');
    $dcComicsList = config('items-footer.dcComicsList');
    $shopList = config('shopList-footer.shopList');
    $dcList = config('dcList-footer.dcList');
    $sitesList = config('sitesList-footer.sitesList');
    $heroCards = config('herocards.heroCards');
    return view('pages.home', compact('navBar', 'dcComicsList', 'shopList', 'dcList', 'sitesList', 'heroCards'));
});
// diamo un nome in modo in modo da poter fare riferimento al name ovunque
Route::get('/comics', [GuestComicController::class, 'index'])->name('comics.index');
