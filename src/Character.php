<?php 
namespace App;


abstract class Character
{
    public $life;
    public $damage;
    public $armor = 0;

    
    public function damage(int $damage) {
        $finalDammage = $damage - $this->armor;

        if ($finalDammage < 0) {
            $finalDammage = 0;
        }
        else {
            $this->life = $this->life - $finalDammage;
        }
    }
}
