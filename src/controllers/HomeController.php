<?php

namespace app\controllers;

use app\Router;

class HomeController
{
    public static function index(Router $router)
    {
        $router->renderView('/index', []);
    }
    public static function signup(Router $router)
    {

        $router->renderView('/signup', []);
    }
    public static function login(Router $router)
    {
        $router->renderView('/login', []);
    }
    public static function gallery(Router $router)
    {;
        $router->renderView('/gallery', []);
    }
    public static function error(Router $router)
    {
        $router->renderView('/error', []);
    }
    public static function quiz(Router $router)
    {
        $router->renderView('/quiz', []);
    }
}
