<?php

namespace App\Enums;

class Difficulty
{
    public const EASY = 0;
    public const MEDIUM = 1;
    public const HARD = 2;
    public const VERY_HARD = 3;
    public const EXTREME = 4;
    public const INSANE = 5;
    public const IMPOSSIBLE = 6;
    public const GODLIKE = 7;

    public function getDifficulty(int $difficulty): string
    {
        return match ($difficulty) {
            self::MEDIUM => 'Medium',
            self::HARD => 'Hard',
            self::VERY_HARD => 'Very Hard',
            self::EXTREME => 'Extreme',
            self::INSANE => 'Insane',
            self::IMPOSSIBLE => 'Impossible',
            self::GODLIKE => 'Godlike',
            default => 'Easy',
        };
    }
}
