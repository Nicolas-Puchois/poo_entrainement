<?php

declare(strict_types=1);
require('model/Jeux.php');
require('model/Joueur.php');
class JoueurController
{
    private object $personnages;
    private string $nom;

    public function __construct() {}

    public function create(): void
    {
        do {
            $newPersonnage = new Joueur('toto', 'm', 'paladin', 25, 150, "bien"); // controller PersonnageController
            $nom->ajouterPersonnage($newPersonnage);
            $response = strtoupper(readline("Voulez-vous créer un autre personnage ? [O/n]"));
        } while ($response == "O");
    }
}
