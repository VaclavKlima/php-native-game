<?php

namespace App\Levels;

interface LevelInterface
{
    public function __construct();
    public function getLayout(): array;
    public function renderLayout(): string;
}
