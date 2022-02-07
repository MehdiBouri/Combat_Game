<?php 
namespace App;


class LieutenantMinion extends Character
{
    public function __construct() {
        $this->life = 30;
        $this->damage = 30;
    }
}
