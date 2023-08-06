<?php

namespace App\Livewire;

use App\Enums\GameStates;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class App extends Component
{
    public GameStates $state = GameStates::MAIN_MENU;

    public function mount($state): void
    {
        $this->state = $state;
    }

    public function render(): View
    {
        return view('livewire.app');
    }
}
