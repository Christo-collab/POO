<?php

require_once 'Animal.php';

class Chien extends Animal
{

    public function crier(): string
    {
        return 'Wouaf Wouaf';
    }

    public function mangerSucre() : string
    {

        return 'Miam Miam';

    }
}