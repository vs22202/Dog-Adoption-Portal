<?php
session_start();
require_once '../vendor/autoload.php';

use app\Router;
use app\controllers\HomeController;
use app\Database;
$router = new Router();
$router->get('/', [HomeController::class, 'index']);
$router->get('/login', [HomeController::class, 'login']);
$router->post('/login', [HomeController::class, 'login']);
$router->get('/signup', [HomeController::class, 'signup']);
$router->post('/signup', [HomeController::class, 'signup']);
$router->get('/gallery', [HomeController::class, 'gallery']);
$router->get('/error', [HomeController::class, 'error']);
$router->get('/quiz', [HomeController::class, 'quiz']);
$router->get('/adlogin', [HomeController::class, 'adlogin']);
$router->post('/adlogin', [HomeController::class, 'adlogin']);
$router->get('/create', [HomeController::class, 'create']);
$router->post('/create', [HomeController::class, 'create']);
$router->get('/list', [HomeController::class, 'list']);
$router->get('/delete', [HomeController::class, 'delete']);
$router->get('/edit', [HomeController::class, 'edit']);
$router->get('/getalldogdetails', [HomeController::class, 'getalldogdetails']);
$router->get('/logout', [HomeController::class, 'logout']);
$router->resolve();
