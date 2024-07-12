<?php

use App\Livewire\GameList;
use App\Livewire\HotGames;
use App\Livewire\WordleGame;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;

Route::get('/', function () {
    return view('home');
});
Route::get('/hot-games', [GameController::class, 'hotGames'])->name('games.hot');
Route::get('/new-games', [GameController::class, 'newGames'])->name('games.new');
Route::get('/favourite-games', [GameController::class, 'favGames'])->name('games.favourite');


Route::get('/about-us', [MainController::class, 'about'])->name('about');


// About page
// Route::get('/about', function () {
//     return view('livewire.about');
// })->name('about');

// Define routes using MainController
Route::get('/about-us', [MainController::class, 'about'])->name('about');
Route::get('/contact-us', [MainController::class, 'contact'])->name('contact-us');
Route::get('/privacy-policy', [MainController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/copyright', [MainController::class, 'copyright'])->name('copyright');
Route::get('/term-of-use', [MainController::class, 'termsOfUse'])->name('term-of-use');
Route::get('/{slug}', [GameController::class, 'show'])->name('games.show');
