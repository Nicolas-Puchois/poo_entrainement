<?php

declare(strict_types=1);

class Voiture
{
    private String $marque;
    private String $modele;
    private String $couleur;
    private int $nombre_porte;
    private bool $electrique;

    public function __construct(String $marque, String $modele, String $couleur, int $nombre_porte, bool $electrique)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->couleur = $couleur;
        $this->nombre_porte = $nombre_porte;
        $this->electrique = $electrique;
    }

    /**
     * Get the value of marque
     *
     * @return String
     */
    public function getMarque(): String
    {
        return $this->marque;
    }

    /**
     * Set the value of marque
     *
     * @param String $marque
     *
     * @return self
     */
    public function setMarque(String $marque): self
    {
        $this->marque = $marque;
        return $this;
    }

    /**
     * Get the value of modele
     *
     * @return String
     */
    public function getModele(): String
    {
        return $this->modele;
    }

    /**
     * Set the value of modele
     *
     * @param String $modele
     *
     * @return self
     */
    public function setModele(String $modele): self
    {
        $this->modele = $modele;
        return $this;
    }

    /**
     * Get the value of couleur
     *
     * @return String
     */
    public function getCouleur(): String
    {
        return $this->couleur;
    }

    /**
     * Set the value of couleur
     *
     * @param String $couleur
     *
     * @return self
     */
    public function setCouleur(String $couleur): self
    {
        $this->couleur = $couleur;
        return $this;
    }

    /**
     * Get the value of nombre_porte
     *
     * @return int
     */
    public function getNombrePorte(): int
    {
        return $this->nombre_porte;
    }

    /**
     * Set the value of nombre_porte
     *
     * @param int $nombre_porte
     *
     * @return self
     */
    public function setNombrePorte(int $nombre_porte): self
    {
        $this->nombre_porte = $nombre_porte;
        return $this;
    }

    /**
     * Get the value of electrique
     *
     * @return bool
     */
    public function getElectrique(): bool
    {
        return $this->electrique;
    }

    /**
     * Set the value of electrique
     *
     * @param bool $electrique
     *
     * @return self
     */
    public function setElectrique(bool $electrique): self
    {
        $this->electrique = $electrique;
        return $this;
    }
}
