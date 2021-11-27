<?php

require_once 'Article.php';

// $article= new Article(); fatal error: to few argument to function __construct

$article=new Article('titre le l\'article');

var_dump($article);