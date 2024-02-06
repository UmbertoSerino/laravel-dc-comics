<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\ComicController as GuestComicController;
use App\Http\Controllers\HomeController as GuestHomeController;

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
    return view('pages.home');
})->name('pages.home');

// diamo un nome in modo in modo da poter fare riferimento al name ovunque
Route::get('/comics', [GuestComicController::class, 'index'])->name('comics.guest.index');
Route::post('/comics', [GuestComicController::class, 'store'])->name('comics.guest.store');
Route::get('/comics/create', [GuestComicController::class, 'create'])->name('comics.guest.create');
Route::get('/comics/{id}', [GuestComicController::class, 'show'])->name('comics.guest.show');
