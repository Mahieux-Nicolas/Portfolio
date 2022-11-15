<?php


require_once '../vendor/autoload.php';


/* ------------
--- ROUTAGE ---
-------------*/

$router = new AltoRouter();


if (array_key_exists('BASE_URI', $_SERVER)) {

    $router->setBasePath($_SERVER['BASE_URI']);

} else { 
   
    $_SERVER['BASE_URI'] = '/';
}


$router->map(
    'GET',
    '/home',
    [
        'method' => 'home',
        'controller' => '\App\Controllers\HomeController' // On indique le FQCN de la classe
    ],
    'home'
);

$router->map(
    'GET',
    '/',
    [
        'method' => 'main',
        'controller' => '\App\Controllers\MainController' // On indique le FQCN de la classe
    ],
    'main'
);
$router->map(
    'GET',
    '/cv',
    [
        'method' => 'cv',
        'controller' => '\App\Controllers\CvController' // On indique le FQCN de la classe
    ],
    'cv'
);
$router->map(
    'GET',
    '/portfolio',
    [
        'method' => 'portfolio',
        'controller' => '\App\Controllers\PortfolioController' // On indique le FQCN de la classe
    ],
    'portfolio'
);


$router->map(
    'GET',
    '/contact',
    [
        'method' => 'contact',
        'controller' => '\App\Controllers\ContactController' // On indique le FQCN de la classe
    ],
    'contact'
);


/* -------------
--- DISPATCH ---
--------------*/

// On demande à AltoRouter de trouver une route qui correspond à l'URL courante
$match = $router->match();


$dispatcher = new Dispatcher($match, '\App\Controllers\ErrorController::err404');

// Setup controllers argument(s)
$dispatcher->setControllersArguments($match, $router);

// Une fois le "dispatcher" configuré, on lance le dispatch qui va exécuter la méthode du controller
$dispatcher->dispatch();
