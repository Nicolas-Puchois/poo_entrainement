<?php
class Joueur
{
    public string $nom;
    public string $classe;
    public string $sexe;
    public int $attaque;
    public int $pv;
    public bool $forceDuBien;


    public function __construct($nom, $sexe, $classe, $attaque, $pv, $forceDuBien)
    {
        $this->nom = $nom;
        $this->classe = $classe;
        $this->attaque = $attaque;
        $this->pv = $pv;
        $this->forceDuBien = $forceDuBien;
        $this->sexe = $sexe;
    }
}
