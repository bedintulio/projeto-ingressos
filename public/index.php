<?php
require __DIR__ . '/../vendor/autoload.php';
session_start();
use Core\Router;
$router = new Router();
require __DIR__ . '/../config/routes.php';
$router->dispatch();
