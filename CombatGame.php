<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require 'vendor/autoload.php';


use App\Hero;
use App\Minion;
use App\LieutenantMinion;
use App\ChefMinion;


session_start();

if (isset($_SESSION['end'])) {
    session_destroy();
}


$hero = new Hero;
$minion = new ChefMinion;


// Initialisation des variables de Session
if (!isset($_SESSION['tour'])) {
    $_SESSION['tour'] = 0;
}
else {
    $_SESSION['tour']++;
}

if (!isset($_SESSION['heroLife']) || !$_SESSION['heroLife']) {
    $_SESSION['heroLife'] = $hero->life;
}

if (!isset($_SESSION['minionLife']) || !$_SESSION['minionLife']) {
    $_SESSION['minionLife'] = $minion->life;
}


// Chargement des variables de Session
$hero->life = $_SESSION['heroLife'];
$minion->life = $_SESSION['minionLife'];
$tour = $_SESSION['tour'];




// Bonus
$bonusLife = false;
$bonusArmor = false;

if (rand(1, 3) == 1) {
    $hero->bonusArmor();
    $bonusArmor = true;
}

if (rand(1, 5) == 1) {
    $hero->bonusLife();
    $bonusLife = true;
}


// Attaques
$hero->damage($minion->damage);
$minion->damage($hero->damage);


// Victoire ou défaite
$victory = 0;

if ($hero->life <= 0) {
    $hero->life = 0;
    $victory = 1;
    $_SESSION['end'] = 1;
}
elseif ($minion->life <= 0) {
    $minion->life = 0;
    $victory = 2;
    $_SESSION['end'] = 1;
}


// Sauvegarde des variables de la Session
$_SESSION['heroLife'] = $hero->life;
$_SESSION['minionLife'] = $minion->life;



require 'CombatGameView.php';