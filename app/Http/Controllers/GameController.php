<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function show($slug)
    {
        $games = config('games');

        if (!array_key_exists($slug, $games)) {
            abort(404);
        }

        $game = $games[$slug];

        return view('game', [
            'title' => $game['title'],
            'gameUrl' => $game['gameUrl'],
            'description' => $game['description']
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
