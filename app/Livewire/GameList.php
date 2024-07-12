<?php

namespace App\Livewire;

use Livewire\Component;

class GameList extends Component
{
    public $games;

    public function mount($games = null)
    {
        $this->games = $games ?? config('games');
    }

    public function render()
    {
        return view('livewire.game-list', ['games' => $this->games]);
    }
}

