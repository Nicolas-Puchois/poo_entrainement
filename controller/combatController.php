<?php

declare(strict_types=1);
require_once('model/Jeux.php');

class combatController
{
    private array $joueursEnCombat = [];
    private object $jeux;

    public function __construct(object $jeux)
    {
        $this->jeux = $jeux;
    }

    // Affiche les joueurs disponibles et retourne le tableau
    public function afficherJoueursDispo(): void
    {
        $joueurs = $this->jeux->getPersonnages();
        echo "\nJoueurs disponibles :\n";
        foreach ($joueurs as $index => $joueur) {
            echo ($index + 1) . ". " . $joueur . "\n";
        }
    }

    // Sélection des 2 joueurs pour le combat
    public function selectionnerCombattants(): void
    {
        $this->afficherJoueursDispo();
        $joueurs = $this->jeux->getPersonnages();

        $joueur1 = (int)readline("\nChoisir le premier combattant (numéro) : ") - 1;
        $joueur2 = (int)readline("Choisir le second combattant (numéro) : ") - 1;

        $this->joueursEnCombat = [
            $joueurs[$joueur1],
            $joueurs[$joueur2]
        ];
    }

    // Gestion du combat
    public function combat(): void
    {
        if (count($this->joueursEnCombat) !== 2) {
            $this->selectionnerCombattants();
        }

        $tourJoueur = 0; // 0 pour joueur 1, 1 pour joueur 2
        $combatTermine = false;

        while (!$combatTermine) {
            $joueurActif = $this->joueursEnCombat[$tourJoueur];
            $joueurPassif = $this->joueursEnCombat[($tourJoueur + 1) % 2];

            echo "\nTour de " . $joueurActif->getNom() . " :\n";
            echo "1. Attaquer\n2. Se défendre\n3. Se soigner\n4. Se rendre\n";

            $action = (int)readline("Choisissez une action : ");

            switch ($action) {
                case 1:
                    $this->attaque($joueurActif, $joueurPassif);
                    break;
                case 2:
                    $this->defense($joueurActif);
                    break;
                case 3:
                    $this->soin($joueurActif);
                    break;
                case 4:
                    echo $joueurActif->getNom() . " se rend !\n";
                    echo $joueurPassif->getNom() . " remporte le combat !\n";
                    $combatTermine = true;
                    break;
            }

            if ($joueurPassif->getPv() <= 0) {
                echo $joueurPassif->getNom() . " est KO !\n";
                echo $joueurActif->getNom() . " remporte le combat !\n";
                $combatTermine = true;
            }

            $tourJoueur = ($tourJoueur + 1) % 2;
        }
    }

    private function attaque(object $attaquant, object $defenseur): void
    {
        $degats = $attaquant->getAttaque();
        $pvRestants = $defenseur->getPv() - $degats;
        $defenseur->setPv($pvRestants);

        echo $attaquant->getNom() . " attaque et inflige " . $degats . " points de dégâts !\n";
        echo $defenseur->getNom() . " a maintenant " . $pvRestants . " points de vie.\n";
    }

    private function defense(object $joueur): void
    {
        // Augmente temporairement les PV de 20%
        $bonusPv = floor($joueur->getPv() * 0.2);
        $joueur->setPv($joueur->getPv() + $bonusPv);

        echo $joueur->getNom() . " se défend et gagne " . $bonusPv . " points de vie temporaires !\n";
    }

    private function soin(object $joueur): void
    {
        $soin = 30;
        $nouveauxPv = $joueur->getPv() + $soin;
        $joueur->setPv($nouveauxPv);

        echo $joueur->getNom() . " se soigne et récupère " . $soin . " points de vie !\n";
        echo "Points de vie actuels : " . $nouveauxPv . "\n";
    }
}
