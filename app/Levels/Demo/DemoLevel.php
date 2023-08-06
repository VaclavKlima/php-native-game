<?php

namespace App\Levels\Demo;

use App\Enums\Difficulty;
use App\Levels\Level;

class DemoLevel extends Level
{
    public function __construct()
    {
        $this->name = 'Demo Level';
        $this->description = 'This is a demo level';
        $this->image = 'https://via.placeholder.com/150';
        $this->level = 'demo_1';
        $this->difficulty = Difficulty::EASY;
        $this->layout = <<<EOT
####################
SIIII###############
####I###############
####I#IIII##########
####I#I##I##IIIIIIIE
####I#I##I##I#######
####III##IIII#######
####################
EOT;

    }
}
