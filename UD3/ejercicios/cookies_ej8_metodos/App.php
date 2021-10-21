<?php

class App {

    public function run()
    {
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
          } else {
            //La primera vez ejecuta el método index
            $method = 'login';
          }
        
          try {
            $this->$method();      
          } catch (Throwable $th) {
            if (method_exists($this, $method)) {
              header("HTTP/1.0 500 Internal Server Error");
              return http_response_code(500);
              echo "Error en el servidor";
            } else {
              header("HTTP/1.0 404 Not Found");
              echo "No encontrado";      
            }  
          } finally {
            echo "<pre>";
            print_r($th);
          }                 
      }
    
  

  public function login(){

        include('views/form.php');
    }

    public function auth(){

        setcookie ('usuario', $_POST['usuario'], time() + 3600 * 24);
        setcookie ('clave', $_POST['clave'], time() + 3600 * 24);


    }

    public function home(){
        if(!isset($_COOKIE['name'])){
            header ('location:? method=login');
            return;
        }
        include('views/home.php');


    }



}
