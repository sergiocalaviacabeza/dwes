<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 11 Pais</title>
    </head>
        <body>
            <?php 
           $pais = array (
            'España' => array('moneda' => 'eu', 'poblacion' => 75000),
            'Escocia' => array('moneda' => 'libra', 'poblacion' => 17000),
            'USA' => array('moneda' => 'dolar', 'poblacion' => 200000),
            'Rumania' => array('moneda' => 'lei', 'poblacion' => 500000),
        );
            
        echo "<pre>";
        print_r($pais);
        echo "</pre>";
            ?>
        </body>
</html>    