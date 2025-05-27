<?php

declare(strict_types=1);
class Jeux
{
    private String $nom;
    private array $personnages;


    public function __construct(String $nom = '', array $personnages = [],)
    {
        $this->nom = $nom;
        $this->personnages = $personnages;

        // $this->create();
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
     * Get the value of personnages
     *
     * @return array
     */
    public function getPersonnages(): array
    {
        return $this->personnages;
    }

    /**
     * Set the value of personnages
     *
     * @param array $personnages
     *
     * @return self
     */
    public function setPersonnages(array $personnages): self
    {
        $this->personnages = $personnages;
        return $this;
    }


    /**
     * Set the value of isCreated
     *
     * @param bool $isCreated
     *
     * @return self
     */
}
