<?php

namespace App\Livewire;

use App\Levels\Demo\DemoLevel;
use App\Levels\LevelInterface;
use Illuminate\View\View;
use Livewire\Component;

class Game extends Component
{
    private LevelInterface $level;

    public function mount(): void
    {
        $this->level = new DemoLevel();
    }

    public function render(): View
    {
        return view('livewire.game', [
            'level' => $this->level->renderLayout(),
        ]);
    }
}
