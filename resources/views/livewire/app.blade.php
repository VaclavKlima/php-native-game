<div>
    @switch($state)
        @case(\App\Enums\GameStates::MAIN_MENU)
            <livewire:main-menu />
            @break
        @case(\App\Enums\GameStates::GAME)
            <livewire:game />
            @break
    @endswitch
</div>
