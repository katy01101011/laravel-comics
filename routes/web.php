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

    $linksArray = config('database_links');
    return view('partials.home', $linksArray);

})->name('home');

// MENU HEADER - INIZIO

Route::get('/characters', function () {
    
    $linksArray = config('database_links');
    return view('partials.menu.characters', $linksArray);
})->name('characters');

Route::get('/comics', function () {
    
    $linksArray = config('database_links');
    return view('partials.menu.comics', $linksArray);
})->name('comics');

Route::get('/movies', function () {
    
    $linksArray = config('database_links');
    return view('partials.menu.movies', $linksArray);
})->name('movies');

Route::get('/tv', function () {
    
    $linksArray = config('database_links');
    return view('partials.menu.tv', $linksArray);
})->name('tv');

Route::get('/games', function () {
    
    $linksArray = config('database_links');
    return view('partials.menu.games', $linksArray);
})->name('games');

Route::get('/collectibles', function () {
    
    $linksArray = config('database_links');
    return view('partials.menu.collectibles', $linksArray);
})->name('collectibles');

Route::get('/videos', function () {
    
    $linksArray = config('database_links');
    return view('partials.menu.videos', $linksArray);
})->name('videos');

Route::get('/fans', function () {
    
    $linksArray = config('database_links');
    return view('partials.menu.fans', $linksArray);
})->name('fans');

Route::get('/news', function () {
    
    $linksArray = config('database_links');
    return view('partials.menu.news', $linksArray);
})->name('news');

Route::get('/shop', function () {
    
    $linksArray = config('database_links');
    return view('partials.menu.shop', $linksArray);
})->name('shop');

// MENU HEADER - FINE