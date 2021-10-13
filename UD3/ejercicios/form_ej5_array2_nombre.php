<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 Arrays Nombres</title>
</head>
<body>
    <h2>Formulario Array nombres</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
        <input type="checkbox" name="nombre[]" value="Sergio"> Sergio <br>
        <input type="checkbox" name="nombre[]" value="Lucia"> Lucia <br>
        <input type="checkbox" name="nombre[]" value="Alejandro"> Alejandro <br>

        <input type="submit" value="enviar">
    </form>

    <?php

    foreach ($_POST['nombre'] as $nombres) {

        echo "Bienvenido $nombres <br>";
    }

    ?>
    </body>
</html>


