<?php

declare(strict_types=1);

require('./controller/JeuxController.php');
require('./controller/JoueurController.php');
// $jeuxController->getAllPersonnage();


$JoueurController = new JoueurController();
$jeuxController = new JeuxController();
$menu = "
1. Créer un jeu
2. Créer un personnage
3. Attaquer
10. Sortir\n";

echo "$menu";

$choixMenu = (int) readline("Choisir un menu : ");


while ($choixMenu != 10) {
    switch ($choixMenu) {
        case 1:
            $jeuxController->create();
            break;
        case 2:
            $jeuxController->getOrCreateJeux();
            $response = "oui";
            $JoueurController = new JoueurController();
            while ($response != 'non') {
                $personnage = $JoueurController->create();
                $personnage = $JoueurController->getPersonnages();
                $jeuxController->ajouterPersonnage($personnage);
                $response = strtolower(readline("voulez-vous créer un autre personnage ?[oui/non] : "));
            }
            $jeuxController->getAllPersonnage();
            break;
        default:
            # code...
            break;
    }
    echo "$menu";
    $choixMenu = (int) readline("Choisir un menu : ");
}
