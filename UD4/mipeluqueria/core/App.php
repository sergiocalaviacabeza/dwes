<?php

class App
{

    function __construct()
    {
        if (isset($_GET['url']) and !empty($_GET['url'])) {
            $url = $_GET['url'];
        } else {
            $url = 'home';
        }
        // vamos a usar la url de la siguiente manera:
        // controlador/metodo/argumentos
        $arguments = explode('/', trim($url, '/'));
        $nameController = array_shift($arguments);
        $nameController = ucwords($nameController) . "Controller";
        if (count($arguments)) {
            $method =  array_shift($arguments);
        } else {
            $method = "index";
        }

         echo "App - Url: $url <br>";

        $file = "app/controllers/$nameController" . ".php";
        if (file_exists($file)) {
            require_once $file;
        } else {
            header("HTTP/1.0 404 Not Found");
            die();
        }
        $controllerObject = new $nameController;
        if (method_exists($nameController, $method)) {
            $controllerObject->$method($arguments);
        } else {
            header("HTTP/1.0 404 Not Found");
            echo "No encontrado";
            die();
        }
    }
}

