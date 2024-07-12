<?php

use App\Http\Controllers\GameController;
use App\Livewire\WordleGame;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Livewire\GameList;
use App\Livewire\HotGames;

Route::get('/', function () {
    return view('home');
});
Route::get('/{slug}', [GameController::class, 'show'])->name('games.show');
Route::get('/hot-games', [GameController::class, 'hotGames'])->name('games.hot');
Route::get('/new-games', [GameController::class, 'newGames'])->name('games.new');
Route::get('/favourite-games', [GameController::class, 'favGames'])->name('games.favourite');

// About page
Route::get('/about', function () {
    return view('livewire.about');
})->name('about');

Route::get('/contact-us', function () {
    return view('livewire.contact-us');
})->name('contact-us');

Route::get('/privacy-policy', function () {
    return view('livewire.privacy-policy');
})->name('privacy-policy');

Route::get('/copyright', function () {
    return view('livewire.copyright');
})->name('copyright');

Route::get('/term-of-use', function () {
    return view('livewire.term-of-use');
})->name('term-of-use');
