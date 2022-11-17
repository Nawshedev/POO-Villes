<?php

class Ville
{
    public $nom;
    public $departement;

    public function __construct($nom, $departement)
    {
        $this->nom = $nom;
        $this->departement = $departement;
    }

    public function showDepartementOfVille()
    {
        return "La ville " . $this->nom . " appartient au département " . $this->departement;
    }

    public function setDepartement($departement)
    {
        $this->departement = $departement;
    }
}
