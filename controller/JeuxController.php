<?php

declare(strict_types=1);
require('model/Jeux.php');
// require('model/Joueur.php');

class JeuxController
{
    private object $jeux;

    public function __construct() {}

    public function create(): void
    {
        $this->jeux = new Jeux();

        $nomJeu = readline("Veuillez saisir le nom du jeu : ");
        $this->jeux->setNom($nomJeu);
        $this->jeux->setIsCreated(true);
    }



    public function ajouterPersonnage(object $personnage): void
    {
        // $tabPersonnages = [];
        $tabPersonnages = $this->jeux->getPersonnages();
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

    /**
     * Get the value of jeux
     *
     * @return object
     */
    public function getJeux(): object
    {
        return $this->jeux;
    }

    public function getOrCreateJeux()
    {
        if (!isset($this->jeux)) {
            $this->create();
        }
        return $this->jeux;
    }
}
