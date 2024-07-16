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

        // Get the game URL and title from the configuration
        $gameUrl = $games[$slug]['gameUrl'];
        $title = $games[$slug]['title'];

        // Try to fetch the game content by slug from the database
        $gameContent = GameContent::where('slug', $slug)->first();

        // If the game content is not found in the database, use the configuration values
        if (!$gameContent) {
            return view('game', [
                'title' => $title,
                'gameUrl' => $gameUrl,
                'description' => 'Game content not found in the database.' // Default message when content is not found
            ]);
        }

        // If the game content is found, use the database values
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
