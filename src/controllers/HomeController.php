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
        if ($_SERVER['REQUEST_METHOD']==='POST') {
            $errors=[];
            $data['user_email']=$_POST['user_email'];
            $data['user_password']=$_POST['user_password'];
            $data['user_confirm_password']=$_POST['user_confirm_password'];
            if($data['user_confirm_password']!==$data['user_password']){
                $errors[]='passwords don\'t match';
            }
            if(empty($errors)){
                Database::$db->add_new_user($data);
                header("Location: /");
                exit;
            }
        }
        $router->renderView('/signup', []);
    }
    public static function login(Router $router)
    {
        if ($_SERVER['REQUEST_METHOD']==='POST') {
            $data['user_email']=$_POST['user_email'];
            $data['user_password']=$_POST['user_password'];
            $user=Database::$db->get_user($data);

            if($user){
                $_SESSION['user']=$user['user_email'];
                header("Location: /");
                exit;
            }
        }
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
        if ($_SERVER['REQUEST_METHOD']==='POST') {
            $data['admin_id']=$_POST['admin_id'];
            $data['admin_password']=$_POST['admin_password'];
            $adminUser=Database::$db->get_admin_user($data);

            if($adminUser){
                $_SESSION['aduser']=$adminUser['admin_id'];
                header("Location: /create");
                exit;
            }
        }
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
                header("Location: /");
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
    public static function getalldogdetails(Router $router)
    {
        $router->deliverJSON('/getalldogdetails');
    }
    public static function logout(Router $router)
    {
        session_unset();    
        session_destroy();
        header("Location: /");
        exit;
    }
}
