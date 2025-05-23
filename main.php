<?php

declare(strict_types=1);
require('./model/Joueur.php');
require('./model/Voiture.php');

$toto = new Joueur("toto", "M", "mage", 13, 80, false);
$tata = new Joueur("tata", "F", "druide", 15, 70, true);

$joueurs = [$toto, $tata];

foreach ($joueurs as $joueur) {
    $genre = $joueur->getSexe() === "M" ? "un" : "une";
    $forceDuBien = $joueur->getForceDuBien() ? "des forces du bien" : "des forces du mal";
    
    echo "► {$joueur->getNom()} est {$genre} {$joueur->getClasse()} avec une attaque de {$joueur->getAttaque()} et {$joueur->getPv()} points de vie {$forceDuBien}\n";
}
