<?php

namespace App\Levels;

use App\Enums\Difficulty;

abstract class Level implements LevelInterface
{
    public string $name;
    public string $description;
    public string $image;
    public string $level;
    public Difficulty|int $difficulty = Difficulty::EASY;
    /**
     * @var string The layout to use for this level <br>
     *  # = Wall <br>
     *  I = Floor <br>
     *  S = Start <br>
     *  E = End <br>
     *  X = Building slot
     */
    public string $layout;

    abstract public function __construct();

    public function getLayout(): array
    {
        return array_map('str_split', explode("\n", $this->layout));
    }

    public function renderLayout(): string
    {
        $layout = $this->getLayout();
        $html = '<div class="level grid-cols-1">';
        $html .= '<div class="level-name">' . $this->name . '</div> <br>';
        $html .= '<div class="level-description">' . $this->description . '</div> <br>';

        // generate table with layout
        $html .= '<table class="level-layout">';
        foreach ($layout as $row) {
            $html .= '<tr>';
            foreach ($row as $cell) {
                $html .= '<td class="level-cell">';
                switch ($cell) {
                    case '#':
                        $html .= '<div class="level-cell level-cell-wall"></div>';
                        break;
                    case 'I':
                        $html .= '<div class="level-cell level-cell-floor"></div>';
                        break;
                    case 'S':
                        $html .= '<div class="level-cell level-cell-start"></div>';
                        break;
                    case 'E':
                        $html .= '<div class="level-cell level-cell-end"></div>';
                        break;
                    case 'X':
                        $html .= '<div class="level-cell level-cell-building-slot"></div>';
                        break;
                }
                $html .= '</td>';
            }
            $html .= '</tr>';
        }
        $html .= '</table>';
        $html .= '</div>';

        return $html;
    }
}
