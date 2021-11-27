<?php

require_once 'Personne.php';

$christophe=new Personne();
// $christophe->prenom; Fatal error, cannot acces to private property
var_dump($christophe);

$christophe->setPrenom("Christophe");
echo $christophe->getPrenom();

//Ici, je réaffecte une nouvelle valeur à la propriété prenom de l'objet christophe
$christophe->setPrenom("Paul");
echo $christophe->getPrenom().'<br>';

//conditionner l'affectation d'un prenom à un minimum de 2 caractères

$toto= new Personne();
$toto->setPrenom('t');

echo $toto->getPrenom();

//Ici, onfait ce qu'on appelle un "appel chainé" à nos setters.
// Ceciétant possible grâce à notre variable $this présente au sein de nos setters
$toto->setPrenom('toto')
     ->setNom('Dupont');

echo $toto->getPrenom();
