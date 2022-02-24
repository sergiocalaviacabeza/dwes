<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 10 Equipo Basket</title>
    </head>
        <body>
            <?php
           
            $basket = [base => 'Juan', escolta => 'Luis', alero => 'Jose', alapivot=>'Jorge', pivot=>'Pepe'];
            foreach ($basket as $el){
               echo $el . '<br>';
            }
            foreach ($basket as $clave => $valor){
                echo $clave. " ". $valor . '<br>';
            }

            ?>
        </body>
</html>    