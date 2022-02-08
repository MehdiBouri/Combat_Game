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
                <img src="hero.jpeg" alt="photo du héro" id="customHero">
            </div>
            <div>
               <p>Vos points de vie : </p>
               <p>Vos points d'armure : </p>
               <p>Vos points d'attaque : 15</p> 
            </div>
            <div>
                <p>Vous avez obtenu une potion de soin : </p>
                <p>Vous avez obtenu de l'armure : </p>
            </div>
        </section>
        <section class="colonneGame">
        <div id="customBtn">
            <button class="classBtn" type="button">Tour : </button>
        </div>
        <div>
            <p>Vous avez gagné</p>
        </div>    
        </section>
        <section class="colonneChef">
        <div>
        <img src="minion.jpeg" alt="photo du minion" id="customMinion"> 
        </div>
            <div>
                <p>Points de vie du minion : </p>
                <p>Points d'attaque du minion : 30</p>
            </div>
        </section>
    </main>
</body>
</html>

