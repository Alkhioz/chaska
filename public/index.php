<?php
require('../vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();

require("../router/router.php");

$router = new router();
$router->start();