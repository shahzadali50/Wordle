<?php

use App\Livewire\GameList;
use App\Livewire\HotGames;
use App\Livewire\WordleGame;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\MainController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GameContentController;


Route::get('/', function () {
    return view('home');
});
Route::get('/dashboard', [MainController::class, 'verifyDashboard'])->name('dashboard');

Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::get('sign-up', [LoginController::class, 'register'])->name('register');
    Route::post('sign-up', [LoginController::class, 'registerUser'])->name('registerUser');
});
Route::post('login', [LoginController::class, 'authenticate'])->name('loginPost');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/hot-games', [GameController::class, 'hotGames'])->name('games.hot');
Route::get('/new-games', [GameController::class, 'newGames'])->name('games.new');
Route::get('/favourite-games', [GameController::class, 'favGames'])->name('games.favourite');

// Define routes using MainController
Route::get('/about-us', [MainController::class, 'about'])->name('about');
Route::get('/contact-us', [MainController::class, 'contact'])->name('contact-us');
Route::get('/privacy-policy', [MainController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/copyright', [MainController::class, 'copyright'])->name('copyright');
Route::get('/term-of-use', [MainController::class, 'termsOfUse'])->name('term-of-use');
Route::get('/{slug}', [GameController::class, 'show'])->name('games.show');



Route::middleware(['auth', AdminMiddleware::class])->as('admin.')->prefix('admin')->group(function () {
    Route::get('/dashboard', [MainController::class, 'dashboard'])->name('dashboard');
    Route::get('/game-content/create', [GameContentController::class, 'index'])->name('game.create');
    Route::post('/image-upload', [GameContentController::class, 'image_upload'])->name('image.upload');
    Route::post('/game-content/insert', [GameContentController::class, 'insert'])->name('gameContent.insert');
    Route::get('/game/list', [GameContentController::class, 'list'])->name('game.list');

});

