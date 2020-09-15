<?php

$routes = json_decode(file_get_contents("../router/routes.json"), true);

$uri = rtrim($_SERVER['REQUEST_URI'], '/');
$uri = !array_key_exists($uri, $routes) ? '/error' : $uri;
echo $routes[$uri]["controller"];
echo $routes[$uri]["action"];
echo $routes[$uri]["method"];