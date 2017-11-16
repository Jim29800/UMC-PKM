<?php
class Pokemon
{
    private  $nom;
    private  $vie;
    private  $type;
    private  $att;
    private  $def;
    private  $attaque1;
    private  $attaque2;    
    private  $faiblesse;
    private  $resistance;
    

    public function __construct($nom, $vie, $type, $attaque1, $attaque2, $faiblesse, $resistance)
    {
        $this->set_nom($nom);
        $this->set_vie($vie);
        $this->set_type($type);        
        $this->set_attaque1($attaque1);
        $this->set_attaque2($attaque2);        
        $this->set_faiblesse($faiblesse);
        $this->set_resistance($resistance);
        // $this->att = $att;
        // $this->def = $def;
    }

    //-------------------------------SET--------------------------------
    public function set_nom($nom)
    {
        $this->nom = $nom;
    }

    public function set_vie($vie) 
    {
        if ($vie > 0) {
            $this->vie = $vie;
        }else{
            $this->vie = "mort";
        }
    }

    public function set_type($type)
    {
        $this->type = $type;
    }

    public function set_attaque1($attaque1)
    {
        $this->attaque1 = $attaque1;
    }

    public function set_attaque2($attaque2)
    {
        $this->attaque2 = $attaque2;
    }

    public function set_faiblesse($faiblesse)
    {
        $this->faiblesse = $faiblesse;
    }

    public function set_resistance($resistance)
    {
        $this->resistance = $resistance;
    }

    //-------------------------------FIN SET----------------------------
    //-------------------------------GET--------------------------------
    public function get_nom()
    {
        return $this->nom;
    }

    public function get_vie() 
    {
        return $this->vie;
    }

    public function get_attaque($choix_attaque)
    {
        if($choix_attaque == 1){
            return $this->attaque1->get_valeur();
        }elseif($choix_attaque == 2){
            
            return $this->attaque2->get_valeur();

        }
    }

    public function get_attaque1()
    {
        return $this->attaque1;
    }

    public function get_attaque2()
    {
        return $this->attaque1;
    }

    public function get_faiblesse()
    {
        return $this->faiblesse;
    }

    public function get_resistance()
    {
        return $this->resistance;
    }
    //-------------------------------FIN GET----------------------------
    //-------------------------------METHODE----------------------------
    public function attaque($cible, $choix_attaque)
    {
        if($cible->get_vie() > 0){
            echo $this->nom." attaque ".$cible->get_nom().".<br>";
            $cible->subit_degat($this->get_attaque($choix_attaque));
        }else{
            echo $this->nom." essai d'attaquer ".$cible->get_nom().", mais il est déjà K.O.";
        }
    }

    public function subit_degat($dommage_subit)
    {
        if($this->vie > 0)
        {
            if ($dommage_subit > $this->def)
            {
                $dmg = $dommage_subit - $this->def;
            }else {
                $dmg = 0;
            }
            $this->vie = $this->vie - $dmg;
            echo $this->nom." à subit ".$dmg." points de dommage, il reste : ".$this->vie." points de vie.<br>";
            if($this->vie <= 0 || $this->vie === "mort"){
                echo $this->nom." est K.O.<br>";
            }
        }else{
            echo $this->nom." est K.O.<br>";
        }
    }
}