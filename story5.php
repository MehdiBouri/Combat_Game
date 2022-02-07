<?php

for ($i=1; $i < 6; $i++) {
    echo '<br><b>Tour '.$i.'</b><br>';
    echo 'Hero Vie : '.$hero->life.'<br>';
    echo 'Hero Armure : '.$hero->armor.'<br>';
    echo 'Chef Vie : '.$chef->life.'<br>';

    if (rand(1, 3) == 1) {
        $hero->bonusArmor();
        echo "Le Héro reçoit un bonus d'armure<br>";
    }
    if (rand(1, 5) == 1) {
        $hero->bonusLife();
        echo "Le Héro reçoit un bonus de vie<br>";
    }

    $chef->damage($hero->damage);
    echo "Héro attaque le Chef Minion<br>";
    $hero->damage($chef->damage);
    echo "Chef Minion attaque le Héro<br>";
}


echo '-----';