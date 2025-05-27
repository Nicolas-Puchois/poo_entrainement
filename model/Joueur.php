<?php

declare(strict_types=1);

class Joueur
{
    private String $nom;
    private String $classe;
    private String $sexe;
    private int $attaque;
    private int $pv;
    private string $forceDuBien;


    public function __construct(String $nom, String $sexe, String $classe, int $attaque, int $PV, string $force)
    {
        // this instancie la propriété de l'objet créé
        $this->nom = $nom;
        $this->sexe = $sexe;
        $this->classe = $classe;
        $this->attaque = $attaque;
        $this->pv = $PV;
        $this->forceDuBien = $force;
        // $this->create();
    }

    /**
     * création d'un joueur
     *
     * @return Joueur
     */
    public function createJoueur(): Joueur
    {
        $nom = readline("Veuillez entrer le nom : ");
        $classe = readline("Veuillez entrer la classe : ");
        $sexe = readline("Veuillez entrer le sexe (M/F) : ");
        $attaque = (int)readline("Veuillez entrer les points d'attaque : ");
        $pv = (int)readline("Veuillez entrer les points de vie : ");
        $forceDuBien = strtolower(readline("Est-ce un personnage du bien ? (oui/non) : ")) === "oui";
        if ($forceDuBien) {
            $force = "bien";
        } else {
            $force = "mal";
        }
        $this->setNom($nom);
        $this->setClasse($classe);
        $this->setSexe($sexe);
        $this->setAttaque($attaque);
        $this->setPv($pv);
        $this->setForceDuBien("force du " . $force);

        return $this;
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
     * @return string
     */
    public function getForceDuBien(): string
    {
        return $this->forceDuBien;
    }

    /**
     * Set the value of forceDuBien
     *
     * @param string $forceDuBien
     *
     * @return self
     */
    public function setForceDuBien(string $forceDuBien): self
    {
        $this->forceDuBien = $forceDuBien;
        return $this;
    }

    public function __toString(): string
    {
        $message = "";
        $genre = $this->getSexe() === "M" ? "un" : "une";
        $forceDuBien = $this->getForceDuBien() ? "des forces du bien" : "des forces du mal";
        $pv = $this->getPv() > 1 ? "points" : "point";
        return "► {$this->getNom()} est {$genre} {$this->getClasse()} avec une attaque de {$this->getAttaque()} et {$this->getPv()} $pv de vie {$forceDuBien}\n";
    }
}
