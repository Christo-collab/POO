<?php
// use permet d'utiliser le nom court de la classe,
// sans son namespace dans le reste du fichier

use Database\Cnx;
use Database\Adapter\Mysql;

// comme on utilise 2 classes dont ne nom court est le même. on donne un alias avec 'as' à l'une des 2
use Smtp\Cnx as smtpCnx;

// require_once 'Database/Cnx.php';
// require_once 'Smtp/Cnx.php';
// require_once 'Database/Adapter/Mysql.php';
require_once 'autoload.php';


//$bdd=new Database\Cnx();
//$bdd->connect();
//
//$smtp=new Smtp\Cnx();
//$smtp->connect();
//
//$mySql=new \Database\Adapter\Mysql();
//$mySql->connect();

$bdd=new Cnx();
$bdd->connect();

$smtp=new smtpCnx();
$smtp->connect();

$mySql= new Mysql();
$mySql->connect();

// ::class est disponible pour toutes les classes et retourne le nom complet de classe avec son namespace
echo Mysql::class;