<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';


use App\Hero;
use App\Minion;
use App\LieutenantMinion;
use App\ChefMinion;

$hero = new Hero;
$minion = new Minion;
$lieutenant = new LieutenantMinion;
$chef = new ChefMinion;


require 'story5.php';
require 'story1.php';
require 'story2.php';
require 'story3.php';
require 'story4.php';
