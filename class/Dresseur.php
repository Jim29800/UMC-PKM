<?php
class Dresseur
{
    private $nom;
    private $regle;

    public function __construct($nom, $regle)
    {
        $this->set_nom($nom);
        $this->set_regle($regle);
    }

    public function set_nom($nom)
    {
        $this->nom = $nom;
    }

    public function set_regle($regle)
    {
        $this->regle = $regle;
    }

    public function get_nom($nom)
    {
        return $this->nom;
    }

    public function get_regle($regle)
    {
        return $this->regle;
    }
    
}