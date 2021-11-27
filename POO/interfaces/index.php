<?php

require_once 'Volume.php';
require_once 'Cube.php';
require_once 'Texture.php';
require_once 'Brique.php';
require_once 'De.php';

function getFormeVolume(Volume $volume)
{
    echo 'La forme du volume est'.$volume->getForme().'<br>';
}

function getMatiereCouleur(Texture $texture)
{

    echo 'La couleur de la texture est' .$texture->getCouleur().'et sa matière'.$texture->getMatiere().'<br>';

}

$cube = new Cube();

// $cube est une instance de notre interface Volume que la classe implémente
var_dump($cube instanceof Volume);//true
getFormeVolume($cube);

$brique = new Brique();
//Ici $brique est instance de Brique, de Texture et de Volume
getFormeVolume($brique);
getMatiereCouleur($brique);

$de = new De('bois', 'rouge');

var_dump($de instanceof De);
var_dump($de instanceof Volume);
var_dump($de instanceof Texture);
var_dump($de instanceof Cube);
getMatiereCouleur($de);
getFormeVolume($de);









