<?php

namespace app;

use app\controllers\HomeController;
use app\Database;
use app\models\Dog;

class Router
{
    public array $getRoutes = [];
    public array $postRoutes = [];
    public function __construct()
    {
        $this->db = new Database();
    }
    public function get($url, $fn)
    {
        $this->getRoutes[$url] = $fn;
    }
    public function post($url, $fn)
    {
        $this->postRoutes[$url] = $fn;
    }
    public function resolve()
    {
        $currentUrl = $_SERVER['REQUEST_URI'] ?? '/';
        if (strpos($currentUrl, '?') !== false) {
            $currentUrl = substr($currentUrl, 0, strpos($currentUrl, '?'));
        }
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $fn = $this->getRoutes[$currentUrl] ?? null;
        }
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $fn = $this->postRoutes[$currentUrl] ?? null;
        }
        if ($fn) {
                call_user_func($fn, $this);
        } else {
                header('Location: /error');
        }
    }
    public function renderView($view, $params = [])
    {
        foreach ($params as $key => $value) {
            $$key = $value;
        }
        ob_start();
        include_once __DIR__ . "/views$view.php";
        $content = ob_get_clean();  
        include_once __DIR__ . "/views/partials/_layout.php";
    }
    public function deliverJSON($route)
    {
        echo json_encode(iterator_to_array($this->db->get_all_dog_details()));
    }
    public function checkLocation($route,$location,$adminid)
    {
        $result=$this->db->get_admin_user(['admin_id'=>$adminid]);
        // echo strtolower($result['shelter_address']);
        // echo strtolower($location);
        // echo str_contains(strtolower($result['shelter_address']),strtolower('dubai'));
        // exit();
        if(str_contains(strtolower($result['shelter_address']),strtolower($location)) || strtolower($location)=='near'){
            echo json_encode(true);
        }
        else{
            echo json_encode(false);
        }
    }
}
