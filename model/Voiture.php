<?php
class Voiture
{
    public string $marque;
    public string $modele;
    public string $couleur;
    public int $nombre_porte;
    public bool $electrique;

    public function __construct($marque, $modele, $couleur, $nombre_porte, $electrique)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->couleur = $couleur;
        $this->nombre_porte = $nombre_porte;
        $this->electrique = $electrique;
    }
}
