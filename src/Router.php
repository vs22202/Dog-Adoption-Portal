<?php

namespace app;

use app\controllers\HomeController;

class Router
{
    public array $getRoutes = [];
    public function get($url, $fn)
    {
        $this->getRoutes[$url] = $fn;
    }
    public function resolve()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {

            $currentUrl = $_SERVER['REQUEST_URI'] ?? '/';
            if (strpos($currentUrl, '?') !== false) {
                $currentUrl = substr($currentUrl, 0, strpos($currentUrl, '?'));
            }
            $fn = $this->getRoutes[$currentUrl] ?? null;
            if ($fn) {
                call_user_func($fn, $this);
            } else {
                header('Location: /error');
            }
        }
    }
    public function renderView($view, $params = [])
    {
        ob_start();
        include_once __DIR__ . "/views$view.php";
        $content = ob_get_clean();
        include_once __DIR__ . "/views/partials/_layout.php";
    }
}
