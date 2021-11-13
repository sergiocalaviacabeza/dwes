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
        $EmployeeController = array_shift($arguments);
        $EmployeeController = ucwords($EmployeeController) . "Controller";
        if (count($arguments)) {
            $method =  array_shift($arguments);
        } else {
            $method = "index";
        }

         echo "App - Url: $url <br>";

        $file = "app/controllers/$EmployeeController" . ".php";
        if (file_exists($file)) {
            require_once $file;
        } else {
            header("HTTP/1.0 404 Not Found");
            die();
        }
        $controllerObject = new $EmployeeController;
        if (method_exists($EmployeeController, $method)) {
            $controllerObject->$method($arguments);
        } else {
            header("HTTP/1.0 404 Not Found");
            echo "No encontrado";
            die();
        }
    }
}

