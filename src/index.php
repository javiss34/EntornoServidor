<?php

include_once "vendor/autoload.php";
include_once "env.php";

use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Exception\HttpRouteNotFoundException;

//Crea una instancia del router
$router = new RouteCollector();

//Define las rutas a las que va a responder mi aplicación web
$router->any('/', function(){
    return 'Esta es la URL principal de mi aplicación';
});

$router->get('/login', function(){
    return include_once "views/login.php";
});

$router->get('/administration', function(){
    return include_once "admin/views/welcome.php";
});

$router->get('/coches', function (){
    return include_once "admin/views/coches.php";
});


try {
    # NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
    $dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
}catch (HttpRouteNotFoundException $e){
    return include_once "views/404.html";
}


// Print out the value returned from the dispatched function
echo $response;