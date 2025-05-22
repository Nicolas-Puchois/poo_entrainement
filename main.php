<?php

require('./model/Joueur.php');
require('./model/Voiture.php');

$toto = new Joueur("toto", "M", "mage", 13, 80, false);
$tata = new Joueur("tata", "F", "druide", 15, 70, true);
// $toto = new Joueur();

$traban = new Voiture("Traban", "601", "bleu", 5, false);
$dacia = new Voiture("Dacia", "Spring", "bleu", 5, true);
$mini = new Voiture("Mini", "Cooper", "rouge", 5, false);


var_dump($traban);
var_dump($dacia);
var_dump($mini);
