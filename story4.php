<?php

echo '<br><br>';
$hero->armor = 0;

echo "Le Héro reçoit un bonus d'armure<br>";
$hero->bonusArmor();
echo 'Hero Armure : '.$hero->armor.'<br>';
echo 'Hero Vie : '.$hero->life.'<br>';
echo "Lieutenant Minion arrive en renfort et attaque le Héro<br>";
$hero->damage($lieutenant->damage);
echo 'Hero Vie : '.$hero->life;