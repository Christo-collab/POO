<?php

// On déclare la classe abstraite afin qu'elle ne puisse être instanciée
// Seules les classes enfants en héritant pourront l'être (instancié)
abstract class Animal
{
    public function identifier()
    {
        return 'Je suis un animal';
    }

    //Les fonctions abstraites ne peuvent être déclarées qu'au sein d'une claasse abstraite. Elle oblige les classes qui en héritent de posséder cette méthode avec un contenu (=implémenter une méthode)
    abstract public function crier(): string;





}