<?php

namespace App\Livewire;

use Livewire\Component;

class HotGames extends Component
{
    public $games;

    public function mount()
    {
        $this->games = config('hot-games');
    }

    public function render()
    {
        return view('livewire.hot-games');
    }
}
