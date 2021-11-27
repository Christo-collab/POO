<?php

require_once 'Vehicule.php';
require_once 'Moto.php';
require_once 'Voiture.php';


$audi = new Voiture('SP95',250,65,25);
echo $audi->getTypeCarburant().'<br>';

$ducati = new Moto('SP98',320,40,15);
echo $ducati->getVitesseMax().'<br>';

