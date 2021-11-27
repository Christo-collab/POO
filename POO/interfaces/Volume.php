<?php

// Une interface ne possède pas de prorpiétés
interface Volume 
{
    //Une classe qui implémente une interface devra contenir cette méthode avec un retour (implémenter une méthode)
    public function getForme(): string;
}