<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class MainMenu extends Component
{
    public function render(): View
    {
        return view('livewire.main-menu');
    }

    public function startGame(): void
    {
        $this->redirect('game');
    }
}
