<div>
    <!-- Game Title -->
    <h1 class="text-4xl text-center font-bold text-white">Test -game ( tower defense )</h1>

    <!-- Buttons -->
    <div class="flex flex-col items-center justify-center space-y-4 mt-4">
        <button wire:click="startGame" class="px-4 py-2 bg-green-500 text-white rounded-md shadow-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 focus:ring-offset-green-200">
            Start Game
        </button>
        <button wire:click="loadGame" class="px-4 py-2 bg-blue-500 text-white rounded-md shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-blue-200">
            Load Game
        </button>
        <button wire:click="settings" class="px-4 py-2 bg-yellow-500 text-white rounded-md shadow-md hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2 focus:ring-offset-yellow-200">
            Settings
        </button>
        <button wire:click="credits" class="px-4 py-2 bg-gray-500 text-white rounded-md shadow-md hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 focus:ring-offset-gray-200">
            Credits
        </button>
    </div>
</div>
