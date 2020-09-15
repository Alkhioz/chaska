<?php
require('../vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();

$controller = isset($_REQUEST['controller']) ? $_REQUEST['controller'] : 'Default';
$accion = isset($_REQUEST['action']) && $_REQUEST['action'] !== "" ? $_REQUEST['action'] : 'Index';

$controller = file_exists("../controllers/$controller.controller.php") ? $controller : 'Error';

require_once "../controllers/$controller.controller.php";
$controller = ucwords($controller) . 'Controller';
$controller = new $controller;

if (!is_callable(array($controller, $accion))){
    require_once "../controllers/Error.controller.php";
    $controller = new ErrorController;
    $accion = 'Index';
}
call_user_func( array( $controller, $accion ) );