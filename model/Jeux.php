<?php

declare(strict_types=1);
class Jeux
{
    private String $nom;
    private array $personnages;

    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }

    public function ajouterPersonnage(object $personnage): void
    {
        $this->personnages[] = $personnage;
    }

    public function getAllPersonnage()
    {
        foreach ($this->personnages as $personnage) {
            echo $personnage;
        }
    }
}
