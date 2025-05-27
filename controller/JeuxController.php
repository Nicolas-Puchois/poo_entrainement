<?php

declare(strict_types=1);
require('model/Jeux.php');
require('model/Joueur.php');

class JeuxController
{
    private object $jeux;

    public function __construct()
    {
        $this->create();
    }

    public function create(): void
    {
        $this->jeux = new Jeux();
        $nomJeu = readline("Veuillez saisir le nom du jeu : ");
        $this->jeux->setNom($nomJeu);
        $response = strtoupper(readline("Voulez-vous créer un personnage ? [O/n] : "));

        while ($response == "O") {
            $newPersonnage = new Joueur('toto', 'm', 'paladin', 25, 150, "bien"); // controller PersonnageController
            $this->ajouterPersonnage($newPersonnage);
            $response = strtoupper(readline("Voulez-vous créer un autre personnage ? [O/n]"));
        };
    }



    public function ajouterPersonnage(object $personnage): void
    {
        $tabPersonnages = [];
        $tabPersonnages[] = $personnage;
        $this->jeux->setPersonnages($tabPersonnages);
    }

    public function getAllPersonnage(): void
    {
        $tabPersonnages = $this->jeux->getPersonnages();
        //  API + front => JSON
        // MVC Complet => passer la variables (tableau)
        require("view/PersonnagesView.php");
    }
}
