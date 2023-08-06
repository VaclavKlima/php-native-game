<?php

use App\Livewire\Game;
use App\Livewire\MainMenu;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',  \App\Livewire\App::class)->name('app');
Route::get('/main-menu',  MainMenu::class)->name('main-menu');
Route::get('/game',  Game::class)->name('game');
