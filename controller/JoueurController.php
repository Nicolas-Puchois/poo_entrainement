<?php

declare(strict_types=1);
// require('model/Jeux.php');
require('model/Joueur.php');
class JoueurController
{
    private object $personnages;
    private string $nom;

    public function __construct() {}

    public function create(): void
    {
        $this->personnages = new Joueur();

        $nom = readline("Veuillez saisir un nom : ");
        $this->personnages->setNom($nom);

        $sexe = readline("Veuillez saisir son sexe : ");
        $this->personnages->setSexe($sexe);

        $classe = readline("Veuillez saisir sa classe : ");
        $this->personnages->setClasse($classe);

        $attaque = (int) readline("Veuillez saisir sa puissance d'attaque : ");
        $this->personnages->setAttaque($attaque);

        $pv = (int) readline("Veuillez saisir son nombre de pv : ");
        $this->personnages->setPv($pv);

        $force = readline("Veuillez saisir son allégence [1 = bien /!=1 = mal]: ");
        $forceDuBien = $force == 1 ? true : false;
        $this->personnages->setForceDuBien($forceDuBien);
    }

    /**
     * Get the value of personnages
     *
     * @return object
     */
    public function getPersonnages(): object
    {
        return $this->personnages;
    }
}
