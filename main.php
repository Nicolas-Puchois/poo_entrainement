<?php

declare(strict_types=1);
require('./model/Joueur.php');
// require('./model/Voiture.php');
require('./model/Jeux.php');

$monJeu = new Jeux("battlefield");

// $toto = new Joueur("toto", "M", "mage", 13, 80, false);
// $tata = new Joueur("tata", "F", "druide", 15, 70, true);

// $monJeu->ajouterPersonnage($toto);
// $monJeu->ajouterPersonnage($tata);
$monJeu->getAllPersonnage();
