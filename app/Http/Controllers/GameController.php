<?php

namespace App\Http\Controllers;

use App\Models\GameContent;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function show($slug)
    {
         // Fetch the games configuration
         $games = config('games');

         // Check if the slug exists in the games configuration
         if (!array_key_exists($slug, $games)) {
             abort(404);
         }

         // Get the game URL from the configuration
         $gameUrl = $games[$slug]['gameUrl'];

         // Fetch the game content by slug from the database
         $gameContent = GameContent::where('slug', $slug)->firstOrFail();

         return view('game', [
             'title' => $gameContent->title,
             'gameUrl' => $gameUrl, // Use the game URL from the configuration
             'description' => $gameContent->description
         ]);
    }

    public function hotGames()
    {
        $games = config('hot-games');

        return view('livewire.hot-games', ['games' => $games]);
    }

    public function newGames()
     {
         $games = config('new-games');

         return view('livewire.new-games', ['games' => $games]);
     }

     public function favGames()
     {
         $games = config('favourite-games');

         return view('livewire.favourite-games', ['games' => $games]);
     }

}
