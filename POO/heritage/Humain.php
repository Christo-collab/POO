<?php

require_once 'Chien.php';

class Humain
{

    //Parce que le paramètre $chien est typé sur la classe Chien, on accède aux méthodes présentes au sein de cette classe
    public function donnerSucre( Chien $chien)
    {
        return $chien->mangerSucre();
    }

    public function caresser(Animal $animal)
    {
        return $animal->crier();
    }

}