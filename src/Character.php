<?php 
namespace App;


abstract class Character
{
    public $life;
    public $damage;
    public $armor = 0;

    
    public function damage($damage) {
        $this->life = $this->life - ($damage - $this->armor);
    }
}
