<?php
require_once("class/Pokemon.php");
require_once("class/Energie.php");
require_once("class/Dresseur.php");
require_once("class/Attaque.php");

$fouet_liane = new Attaque("Fouet Liane", 10);
$canon_graine = new Attaque("Canon graine", 20);
$vampigraine = new Attaque("Vampigraine", 20);
$poing_dard = new Attaque("Poing Dard", 50);
$attaque_trebuchante = new Attaque("Attaque Trébuchante", 80);
$ecras_face = new Attaque("Ecrase Face", 10);
$goute_a_goute = new Attaque("Goute à Goute", 20);
$aqua_vague = new Attaque("Aqua-Vague", 40);
$tatamigaeshi = new Attaque("Tatamigaeshi", 40);
$aqua_dague = new Attaque("Aqua-Dague", 80);
$griffe = new Attaque("Griffe", 10);
$charbon_mutant = new Attaque("Charbon Mutant", 20);
$souffle_feu = new Attaque("Souffle-Feu", 20);
$queue_de_flammes = new Attaque("Queue de Flammes", 60);
$feu_follet = new Attaque("Feu Follet", 30);
$deflagration = new Attaque("Déflagration", 120);





$marisson = new Pokemon("Marisson", 60,"plante", $fouet_liane ,$canon_graine , "", "feu");
$boguerise = new Pokemon("Boguerise", 90,"plante", $vampigraine, $poing_dard, "", "feu");
$blindepique = new Pokemon("Blindepique", 150,"plante", $poing_dard, $attaque_trebuchante, "", "feu");
$grenousse = new Pokemon("Grenousse", 60,"eau", $ecras_face, $goute_a_goute, "", "plante");
$croaporal = new Pokemon("Croâporal", 80,"eau", $goute_a_goute, $aqua_vague, "", "plante");
$amphinobie = new Pokemon("Amphinobie", 140,"eau", $tatamigaeshi, $aqua_dague, "", "plante");
$feunnec = new Pokemon("Feunnec", 60,"feu", $griffe, $charbon_mutant, "", "eau");
$roussil = new Pokemon("Roussil", 80,"feu", $souffle_feu, $queue_de_flammes, "", "eau");
$goupelin = new Pokemon("Goupelin", 140,"feu", $feu_follet, $deflagration, "", "eau");

$feu = new Energie("feu");
$eau = new Energie("eau");
$plante = new Energie("plante");
$normal = new Energie("normal");

$sacha = new Dresseur("Sacha", "regles de Sacha");
$pokeball = new Dresseur("Sacha", "regles de Sacha");
$prof_chen = new Dresseur("Prof Chen", "regles du prof chen");


var_dump($marisson);

$marisson->attaque($blindepique, 1);
$marisson->attaque($blindepique, 2);
$marisson->attaque($blindepique, 1);




var_dump($marisson);
var_dump($boguerise);
var_dump($blindepique);
var_dump($grenousse);
var_dump($croaporal);
var_dump($amphinobie);
var_dump($feunnec);
var_dump($roussil);
var_dump($goupelin);

var_dump($feu);
var_dump($eau);
var_dump($plante);
var_dump($normal);

var_dump($sacha);
var_dump($pokeball);
var_dump($prof_chen);

