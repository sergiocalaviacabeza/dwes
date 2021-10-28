<?php

class App
{
    private $numeros = array();

    public function run(){

            // Recoger los argumentos de $_GET
            // El método a ejecutar depende de un argumento $GET 
            if (isset($_GET['method'])) {
              $method = $_GET['method'];
            } else {
              //La primera vez ejecuta el método index
              $method = 'index';
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

    public function index(){
          // Incluye la vista index.php
          // echo "Estamos en el index<br>";
          include('views/index.php');
        }    
    
    public function primos(){
        echo "Números primos entre 1 y 1000: <br>";
          $contador = 0;
          for ($n = 1; $n <= 1000; $n++) {
            for ($i = 1; $i < $n; $i++) {
              if ($n % $i == 0) {
                $contador = $contador +1;
              } 
            }
            if ($contador==2) {
              echo $n . ", ";
            }
            $contador=0;
          }
    }

    public function fibonacci(){
        $numero_anterior = 1;
        $numero_posterior = 0;
        $serie = 0;
        $fin = 1000;
        echo "Serie Fibonacci: <br>";
        while ($serie < $fin){
            echo $serie . ", ";
            $serie = $numero_anterior + $numero_posterior;
            $numero_posterior=$serie;
        }
    }

    public function potencia2(){
        echo "Potencia de 2 - valores hasta 2 elevado a 24: <br>";

        for ($i=1;$i<=24; $i++){
            $resultado = pow (2,$i);
            echo $resultado . ", ";
        }

    }

    public function factorial(){
        echo "Factorial: <br>";
        $factorial = 1;
        for($i = 1; $i < 1000000; $i++){
            $factorial = $factorial * $i;
            if ($factorial < 1000000){
              echo $factorial . ", ";
            }
            
        }

    }
}   


    /*echo "Función matemática aleatoria<br><br>";
        $opcion = rand(1,4);
        if ($opcion == 1){
            echo "Cálculo números primos<br>";
            $this->primos();
        } else if ($opcion == 2){
            echo "Serie de Fibonacci:<br><br>";
            $this->fibonacci(); 
        } else if ($opcion == 3){
            echo "Potencia de 2<br>";
            $this->potencia2(); 
        } else if ($opcion == 4){
            echo "Factorial:<br>";
            $this->factorial(); 
        }
    */    


