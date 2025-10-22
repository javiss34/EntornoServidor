<?php

include_once "vendor/autoload.php";
include_once "env.php";
include_once "auxiliar/funciones-aux.php";

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

$router->get('/letra-dni',function () {

    $letra_dni="";
    if(isset($_GET['dni'])){
        $letra_dni= calcularLetraDni($_GET['dni']);
    }else{
        $letra_dni= "No se ha recibido ningun parámetro";
    }
    include_once DIRECTORIO_ADMIN_VISTAS."dni.php";

});

$router->post('/letra-dni',function (){
    return calcularLetraDni($_POST['dni']);
});

$router->get('/generar-contrasenia',function (){
    $contrasenia="";
    if(isset($_GET['contrasenia'])){
        $contrasenia = "Contraseña generada:<br>".generarContrasenia($_GET['contrasenia']);
    }else{
        $contrasenia = "No has dicho el tamaño de la contraseña";
    }
    include_once DIRECTORIO_ADMIN_VISTAS."generarContraseña.php";
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