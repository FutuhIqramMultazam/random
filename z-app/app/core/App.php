<?php

class App
{
    private $controller = "Home", $method = "index", $params = [];
    public function __construct()
    {
        $str = $this->ambilURL();

        // controller
        if ($str !== null && file_exists("../app/controllers/{$str[0]}.php")) {
            $this->controller = $str[0];
            unset($str[0]);
        }

        // instansiasi
        require "../app/controllers/{$this->controller}.php";
        $this->controller = new $this->controller;

        // method
        if (isset($str[1])) {
            if (method_exists($this->controller, $str[1])) {
                $this->method = $str[1];
                unset($str[1]);
            }
        }

        // param
        if (!empty($str)) {
            $this->params = array_values($str);
        }

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function ambilURL()
    {
        if (isset($_GET["url"])) {
            $url = $_GET["url"];
            $url = rtrim($url, '/');
            $url = explode("/", $url);
            return $url;
        }
    }
}
