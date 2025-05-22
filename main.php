<?php

require('./model/Joueur.php');
require('./model/Voiture.php');

$toto = new Joueur("toto", "M", "mage", 13, 80, false);
$tata = new Joueur("tata", "F", "druide", 15, 70, true);
// $toto = new Joueur();

$traban = new Voiture("Traban", "601", "bleu", 5, false);
