<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $comics = config('comicsDB.comics');
    return view('home', compact('comics'));
})->name('home');

Route::get('/{id}', function ($id) {
    $comics = config('comicsDB.comics');
    //dd($comics);
    $comic = $comics[$id];
    return view('comics.show', compact('comic'));
})->name('single-comic.show');


Route::get('/characters', function () {
    return view('characters');
})->name('characters');

Route::get('/comics', function () {
    $comics = config('comicsDB.comics');
    
    return view('comics');
})->name('comics');

Route::get('/movies', function () {
    return view('characters');
})->name('movies');

Route::get('/TV', function () {
    return view('characters');
})->name('TV');

Route::get('/games', function () {
    return view('characters');
})->name('games');

Route::get('/collectibles', function () {
    return view('characters');
})->name('collectibles');

Route::get('/videos', function () {
    return view('characters');
})->name('videos');

Route::get('/fans', function () {
    return view('characters');
})->name('fans');

Route::get('/news', function () {
    return view('characters');
})->name('news');

Route::get('/shop', function () {
    return view('characters');
})->name('shop');

