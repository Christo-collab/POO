<?php

require_once 'Chat.php';
require_once 'Chien.php';
require_once 'Humain.php';
require_once 'MaitreChien.php';


$chat=new Chat();
echo $chat->identifier().'<br>'; // Je suis un animal et je suis un chat.

// instanceof est une fonction de PHP renvoyant un boolean pour connaître l'instance de la classe
var_dump($chat instanceof Chat); // true

//Chat est aussi instance de la classe Animal, en héritant et pouvant bénéficier de ses méthodes
var_dump($chat instanceof Animal);

$chien=new Chien();
echo $chien->identifier().'<br>';
echo $chien->crier().'<br>';

$humain=new Humain();
echo $humain->donnerSucre($chien).'<br>';

//echo $humain->donnerSucre($chat); $chat n'est pas instancé de la classe Chein

echo $humain->caresser($chien).'<br>';
echo $humain->caresser($chat).'<br>';

$milou=new Chien();
$tintin=new MaitreChien($milou);

// trouver les différentes possibilités de faire aboyer Milou

echo $milou->crier().'<br>';
echo $tintin->getChien()->crier().'<br>';
echo $humain->caresser($milou).'<br>';

