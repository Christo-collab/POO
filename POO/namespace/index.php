<?php

require_once 'Database/Cnx.php';
require_once 'Smtp/Cnx.php';
require_once 'Database/Adapter/Mysql.php';

$bdd= new Database\Cnx();
$bdd->connect();

$smtp=new Smtp\Cnx();
$smtp->connect();

$mySql=new Database\Adapter\Mysql();
