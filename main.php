<?php

declare(strict_types=1);

require('./controller/JeuxController.php');
require('./controller/JoueurController.php');
// $jeuxController->getAllPersonnage();


$menu = "1. Créer un jeu
2. Créer un personnage
10. Sortir\n";

echo "$menu";

$choixMenu = (int) readline("Choisir un menu : ");


while ($choixMenu != 10) {
    switch ($choixMenu) {
        case 1:
            $jeuxController = new JeuxController();
            $jeuxController->getAllPersonnage();

            echo "$menu";
            $choixMenu = (int) readline("Choisir un menu : ");

            break;
        case 2:
            $JoueurController = new JoueurController();
            $tabPersonnages = $JoueurController->create();
            $jeuxController = $setPersonnages($tabPersonnages);
            $jeuxController = $getAllPersonnages();
            break;
        default:
            # code...
            break;
    }
}
echo "bye bye";
