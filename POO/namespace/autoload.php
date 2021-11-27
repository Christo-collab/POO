<?php

// cette fonction est éxécutée automatiquement quand on utilise une classe contenue dans un fichier sans l'avoir inclus au préalable
// $className est le nom de la classe que l'on souhaitera utiliser
spl_autoload_register(function ($className){

    // 1=> echo $className;
    // 2=>echo 'require_once '.$className;
    // 3=> echo 'require_once '.$className.'.php';
    // 4=> echo 'require_once '.__DIR__.'\\'.$className.'.php';
    // 5=>  DIRECTORY_SEPARATOR est une constante de php qui permet d'afficher les bons séparateurs en fonction des OS utilisés
   // echo 'require_once '.__DIR__.DIRECTORY_SEPARATOR.$className.'.php';

    //6=> str_replace('ce que l'on veut remplacer', 'par quoi on veut remplacer', 'sur quelle variable on veut remplacer')
    $finalClass=str_replace('\\', DIRECTORY_SEPARATOR, $className);
    require_once __DIR__.DIRECTORY_SEPARATOR.$finalClass.'.php';



});
