<?php

require_once 'Chat.php';
final class Siamois extends Chat
{
    

    public function decrire()
    {
        //L'attribut couleur ayant été déclaré private, seul le passage par les getters et setters permettent d'accéder à la propriété
        //En revanche, couleurYeux ayant été déclarée protected et Siamois héritant de Chat, on peut accéder directement à la propriété

        return 'Le siamois est de couleur'.$this->getCouleur();
    }

    // public function ronronner()
    // {
        // On ne peut plus surcharger une méthode déclarée finale dans la classe parente
    // }
}
