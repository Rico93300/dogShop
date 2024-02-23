<?php

// fonction qui permet de recuperer juste l'uri
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// le tableau de routage
$routes = [
    //'/' => '/home.php',
    '/contact' => '/contact.php',
    '/contactValide' => '/contactValide.php',
    '/nourriture' => '/nourriture.php',
];

// la condition qui retourne un fichier si la route existe
if(array_key_exists($uri, $routes)){
    require_once(__DIR__ .$routes[$uri]);
} else{
    require_once(__DIR__.'/404.php');
}

?>