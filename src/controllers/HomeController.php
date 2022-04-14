<?php

namespace app\controllers;

use app\Router;
use app\Database;
use app\models\Dog;

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
    public static function adlogin(Router $router)
    {
        $router->renderView('/CRUD/adlogin', []);
    }
    public static function create(Router $router)
    {
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $data['name']=$_POST['dog_name'];
            $data['breed']=$_POST['dog_breed'];
            $data['age']=$_POST['dog_age'];
            $data['description']=$_POST['dog_description'];
            $data['imageFiles'] =$_FILES['dog_images'];
            $dog= new Dog();
            $dog->load($data);
            $errors=$dog->save();
            if (empty($errors)) {
                header("Location: /products");
                exit;
            }
        }
        $router->renderView('/CRUD/create', []);
    }
    public static function list(Router $router)
    {
        $router->renderView('/CRUD/list', []);
    }
    public static function delete(Router $router)
    {
        $router->renderView('/CRUD/delete', []);
    }
    public static function edit(Router $router)
    {
        $router->renderView('/CRUD/edit', []);
    }
}
