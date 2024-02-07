<?php

use App\Http\Controllers\Admin\MovieController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\ComicController as GuestComicController;
use App\Http\Controllers\Admin\MovieController as AdminMovieController;

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

// ------------------ Route Comics
Route::get('/comics', [GuestComicController::class, 'index'])->name('comics.guest.index');
Route::get('/comics/create', [GuestComicController::class, 'create'])->name('comics.guest.create');
Route::post('/comics', [GuestComicController::class, 'store'])->name('comics.guest.store');
Route::get('/comics/{id}', [GuestComicController::class, 'show'])->name('comics.guest.show');
Route::put('/comics/{id}', [GuestComicController::class, 'update'])->name('comics.guest.update');
Route::get('/comics/{id}/edit', [GuestComicController::class, 'edit'])->name('comics.guest.edit');


// ------------------ Route Movies
Route::get('/movies', [AdminMovieController::class, 'index'])->name('movies.guest.index');
Route::get('/movies/create', [AdminMovieController::class, 'create'])->name('movies.guest.create');
Route::post('/movies', [AdminMovieController::class, 'store'])->name('movies.guest.store');
Route::get('/movies/{id}', [AdminMovieController::class, 'show'])->name('movies.guest.show');