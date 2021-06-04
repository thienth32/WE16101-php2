<?php

use App\Controllers\HomeController;
use Phroute\Phroute\RouteCollector;


$url = isset($_GET['url']) ? $_GET['url'] : "/";

$router = new RouteCollector();

$router->get('/', [HomeController::class, 'index']);



# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url));
    
// Print out the value returned from the dispatched function
echo $response;
?>