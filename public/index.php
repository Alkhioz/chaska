<?php
require('../vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();

require_once('../controllers/controllerManager.php');

$controllerManager = new controllerManager();

$controller_name = isset($_REQUEST['controller']) ? $_REQUEST['controller'] : 'Default';
$action_name = isset($_REQUEST['action']) && $_REQUEST['action'] !== "" ? $_REQUEST['action'] : 'Index';

$controllerManager->executeAction($controller_name, $action_name);