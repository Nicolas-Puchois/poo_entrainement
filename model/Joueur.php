<?php

declare(strict_types=1);

class Joueur
{
    private String $nom;
    private String $classe;
    private String $sexe;
    private int $attaque;
    private int $pv;
    private bool $forceDuBien;


    public function __construct(String $nom, String $sexe, String $classe, int $attaque, int $pv, bool $forceDuBien)
    {
        $this->nom = $nom;
        $this->classe = $classe;
        $this->attaque = $attaque;
        $this->pv = $pv;
        $this->forceDuBien = $forceDuBien;
        $this->sexe = $sexe;
    }

    /**
     * Get the value of nom
     *
     * @return String
     */
    public function getNom(): String
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @param String $nom
     *
     * @return self
     */
    public function setNom(String $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Get the value of classe
     *
     * @return String
     */
    public function getClasse(): String
    {
        return $this->classe;
    }

    /**
     * Set the value of classe
     *
     * @param String $classe
     *
     * @return self
     */
    public function setClasse(String $classe): self
    {
        $this->classe = $classe;
        return $this;
    }

    /**
     * Get the value of sexe
     *
     * @return String
     */
    public function getSexe(): String
    {
        return $this->sexe;
    }

    /**
     * Set the value of sexe
     *
     * @param String $sexe
     *
     * @return self
     */
    public function setSexe(String $sexe): self
    {
        $this->sexe = $sexe;
        return $this;
    }

    /**
     * Get the value of attaque
     *
     * @return int
     */
    public function getAttaque(): int
    {
        return $this->attaque;
    }

    /**
     * Set the value of attaque
     *
     * @param int $attaque
     *
     * @return self
     */
    public function setAttaque(int $attaque): self
    {
        $this->attaque = $attaque;
        return $this;
    }

    /**
     * Get the value of pv
     *
     * @return int
     */
    public function getPv(): int
    {
        return $this->pv;
    }

    /**
     * Set the value of pv
     *
     * @param int $pv
     *
     * @return self
     */
    public function setPv(int $pv): self
    {
        $this->pv = $pv;
        return $this;
    }

    /**
     * Get the value of forceDuBien
     *
     * @return bool
     */
    public function getForceDuBien(): bool
    {
        return $this->forceDuBien;
    }

    /**
     * Set the value of forceDuBien
     *
     * @param bool $forceDuBien
     *
     * @return self
     */
    public function setForceDuBien(bool $forceDuBien): self
    {
        $this->forceDuBien = $forceDuBien;
        return $this;
    }
}
