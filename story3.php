<?php

echo '<br><br>';
echo 'Hero Vie : '.$hero->life.'<br>';
echo "Minion attaque le Héro<br>";
$hero->damage($minion->damage);
echo 'Hero Vie : '.$hero->life;