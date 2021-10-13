<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 Arrays Nombres</title>
</head>
<body>
    <h2>Formulario Array nombres</h2>
    <?php
    //Crear el array donde se guardan los datos
    $nombres = array();
    // Comprobamos si se ha recibido por post la variable array, y si tiene
    // algun valor
        if (isset($_POST["array"]) && $_POST["array"]) {
 
		// Obtenemos el array pasado por post
        $nombres = unserialize(stripslashes($_POST["array"]));
        }
 
        // Si hemos recibido un nombre
        if (isset($_POST['nombre'])
        {
            // Añadimos el nuevo nombre
            $nombres[$_POST['nombre']];
        }
 
        if(count($nombres)>0)
        {
            // mostramos los valores del array
            foreach($nombres as $nombre)
            {
                echo "<br>".$nombre;
            }
        }
        ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 
            <!--
            Enviamos el array pasandolo como aculto (hidden). Fijar que las comillas
            son simples, ya que el serialize, pone comillas dobles.
            -->
            <input type="hidden" name="array" value='<?php echo serialize($nombres);?>'>
            <div>
                <h4>Nombre</h4><input type="text" name="nombre">
                <input type="submit" name="submit" value="Enviar">
            </div>
        </form>
    </body>
</html>


