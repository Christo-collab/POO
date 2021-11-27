<?php
require_once 'Config.php';


// On peut accéder directement à une constante de classe grace à l'opérateur de résolution de portée ::
echo Config::RACINE_WEB;

echo '<br>'.Config::getPath('index.php');