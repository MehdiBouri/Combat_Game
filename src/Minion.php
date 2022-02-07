<?php 
namespace App;


class Minion extends Character
{
    public function __construct() {
        $this->life = 10;
        $this->damage = 10;
    }
}
