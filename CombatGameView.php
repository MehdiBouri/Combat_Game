<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <title>CombatGame</title>
</head>
<body>
    <main class="ligneGame">
        <section class="colonneHero">
            <div>
                <img src="img/hero.jpeg" alt="photo du héro" id="customHero">
            </div>
            <div>
               <p>Vos points de vie : <?php echo $hero->life ?></p>
               <p>Vos points d'armure : <?php echo $hero->armor ?></p>
            </div>
            <div>
                <?php
                if ($bonusLife) {
                    ?>
                    <p>Vous avez obtenu une potion de soin !</p>
                    <?php
                }

                if ($bonusArmor) {
                    ?>
                    <p>Vous avez obtenu de l'armure !</p>
                    <?php
                }
                ?>
            </div>
        </section>

        <section class="colonneGame">
            <div id="customBtn">
                <a class="classBtn" href="">Tour : <?php echo $tour ?></a>
            </div>
            <div>
                <?php
                if ($victory == 1) {
                    ?>
                    <p>Vous avez perdu...</p>
                    <?php
                }
                elseif ($victory == 2) {
                    ?>
                    <p>Vous avez gagné !</p>
                    <?php
                }
                ?>
            </div>
        </section>

        <section class="colonneChef">
            <div>
                <img src="img/minion.jpeg" alt="photo du minion" id="customMinion"> 
            </div>
            <div>
                <p>Points de vie du minion : <?php echo $minion->life ?></p>
            </div>
        </section>
    </main>
</body>
</html>

