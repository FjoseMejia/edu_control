<?php
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../bootstrap.php';

$routes = require __DIR__ . '/../routes.php';
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$base = '/EduControl/public';
$route = trim(str_replace($base, '', $path), '/');

// Para distinguir rutas GET y POST
$method = $_SERVER['REQUEST_METHOD'];
$key = ($method === 'POST') ? "$route-post" : $route;

if (isset($routes[$key])) {
    $routes[$key]();
} else {
    http_response_code(404);
    echo "Ruta no encontrada: /$route";
}