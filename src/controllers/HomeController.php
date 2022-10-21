<?php

namespace app\controllers;

use app\Router;
use app\Database;
use app\models\Dog;
use MongoDB\BSON\ObjectId;
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
    {
        
        $router->renderView('/gallery', ['get'=>$_GET ?? null]);
    }
    public static function error(Router $router)
    {
        $router->renderView('/error', []);
    }
    public static function quiz(Router $router)
    {
        if ($_SERVER['REQUEST_METHOD']==='POST') {
            echo '<pre>';
            var_dump($_POST);
            echo '</pre>';
            $optionSeq=null;
            foreach ($_POST as $key => $value) {
                $optionSeq.=$value;
            }
            $optionKey=array('aaabbcbac'=>'Affenpinscher','babbabacd'=>'Yorkshire Terrier','cdaaddddb'=>'Anatolian Shepard Dog','bcbdcaddc'=>'French Mastiff');
            if(isset($optionKey[$optionSeq])){
                header("Location: /gallery?search=$optionKey[$optionSeq]&location=near");
                exit;
            }
            else{
                header("Location: /gallery");
                exit;
            }
        }
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
            $data['uploadedBy']=$_POST['uploaded_by'];
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
    public static function getlocation(Router $router)
    {
        $router->checkLocation('/getlocation',$_GET['location'],$_GET['admin_id']);
    }
    public static function logout(Router $router)
    {
        session_unset();    
        session_destroy();
        header("Location: /");
        exit;
    }
    public static function seemore(Router $router)
    {
        $name = $_GET['name'];
        if (!$name) {
            header("location:/products");
            exit;
        }
        $dog=Database::$db->get_dog_details(['name'=>$name]);
        $uploadedByAdmin=Database::$db->get_admin_user(['admin_id'=>$dog['uploadedBy']]);
        $router->renderView('/seemore', [
            'dog'=>$dog,
            'uploadedByAdmin'=>$uploadedByAdmin
        ]);
    }
}
