<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 8 Equipo Basket</title>
    </head>
        <body>
            <?php
            $basket = ['Juan', 'Luis', 'Jose', 'Jorge', 'Pepe'];
            //$basket = [0 => 'Juan', 1 => 'Luis', 2 => 'Jose', 3=>'Jorge', 4=>'Pepe'];
            foreach ($basket as $el){
                echo $el . '<br>';
            }
            foreach ($basket as $clave => $valor){
                echo $clave. " ". $valor . '<br>';
            }

            ?>
        </body>
</html>    