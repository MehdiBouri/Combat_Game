<?php 
namespace App;


abstract class Character
{
    public $life;
    public $damage;
    public $armor = 0;

    
    public function damage(int $damage) {
        $finalDammage = $damage - $this->armor; // Calcul des dégats par rapport à l'armure

        if ($finalDammage < 0) {
            $finalDammage = 0; // Armure supérieure aux dégats
        }
        else {
            $this->life = $this->life - $finalDammage;
        }
    }
}
