<?php
class Attaque
{
    private $nom;
    private $valeur;

    public function __construct($nom, $valeur)
    {
        $this->nom = $nom;
        $this->valeur = $valeur;        
    }
    public function get_valeur()
    {
        return (int) $this->valeur;        
    }
}