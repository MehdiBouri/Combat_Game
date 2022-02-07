<?php 
namespace App;


class Hero extends Character
{
    public function __construct() {
        $this->life = 200;
        $this->damage = 15;
    }

    public function bonusLife() {
        $this->life = $this->life + 50;
    }

    public function bonusArmor() {
        $this->armor = $this->armor + 20;
    }
}
