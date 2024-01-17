<?php

namespace App\config\helpers;

class Utils
{
    public static function renderComponent(string $view, array $params = [])
    {
        foreach ($params as $key => $val) {
            $$key = $val;
        }
        ob_start();
        include_once dirname(dirname(__DIR__)) . "/views/$view.php";
        return ob_get_clean();
    }
}
