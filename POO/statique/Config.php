<?php

class Config
{
    
    const RACINE_WEB='/POO/statique/';

    //Une méthode statiquepeut être utilisée directement depuis la classe sans créer d'objet
    public static function getPath(string $fileName)
    {
        //self:: fait référence à la classe elle-même
        //On ne peut pas utiliser $this pour méthode statique, $this faisant référednce à l'objet courant et nos méthodes statiques pouvant être appelées directement sans instanciation d'un nouvel objet 
        return self:: RACINE_WEB.$fileName;

    }
}
