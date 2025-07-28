<?php
require __DIR__ . '/../vendor/autoload.php';

use Core\Router;

session_start();
$router = new Router();
require __DIR__ . '/../config/routes.php';
$router->dispatch();
