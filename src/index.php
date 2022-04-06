<?php
require_once '../vendor/autoload.php';

use app\Router;
use app\controllers\HomeController;

$router = new Router();
$router->get('/', [HomeController::class, 'index']);
$router->get('/login', [HomeController::class, 'login']);
$router->get('/signup', [HomeController::class, 'signup']);
$router->get('/gallery', [HomeController::class, 'gallery']);
$router->get('/error', [HomeController::class, 'error']);
$router->resolve();
