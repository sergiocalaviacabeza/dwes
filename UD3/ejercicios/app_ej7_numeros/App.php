<?php

class App
{
    private $numeros = array();

    public function run(){
        echo "Función matemática aleatoria";
        $opcion = rand(0,2);
        if ($opcion == 0){
            echo "Cálculo números primos";
            $this->primos();
        } else if ($opcion == 1){
            echo "Serie de Fibonacci";
            $this->fibonacci(); 
        } else {
            echo "Potencia de 2";
            $this->potencia2(); 
        }

    }
    
    public function primos(){
        echo "Números primos entre 2 y 10000: <br>";

          for ($n = 2; $n <= 10000; $n++) {
            $esPrimo = true;
            for ($i = 2; $i < $n; $i++) {
              if ($n % $i == 0) {
                $esPrimo = false;
              }
            }
            if ($esPrimo) {
              echo "$n&nbsp;&nbsp;&nbsp;";
            }
          }
    }

    public function fibonacci(){
        $numero_anterior = 1;
        $numero_posterior = 0;
        $serie = 0;
        $fin = 100;
        echo "Serie de Fibonacci: ";
        while ($serie < $fin){
            echo $serie . ", ";
            $serie = $numero_anterior + $numero_posterior;
            $numero_posterior=$serie;
        }
    }

    public function potencia2($numero,$potencia){
        $potencia = 2;
        $resultado = $numero;
        for ($i=2;$i>1; $i--){
            $resultado = $resultado * $numero;
        }
        $numero = $resultado;
        return $numero;
    }


}