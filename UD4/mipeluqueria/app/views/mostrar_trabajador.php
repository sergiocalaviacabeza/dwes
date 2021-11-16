<!DOCTYPE html>
<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
    <?php require "app/views/header.php" ?>
        <h1>Datos trabajador</h1>
        <ul>
            <li>Nombre: <?= $_SESSION['nombre_trab']?></li>
            <li>Apellidos: <?= $_SESSION['apellidos_trab']?></li> 
            <li>Teléfono: <?= $_SESSION['telefono_trab']?></li>
            <li>Categoría: <?= $_SESSION['cat_trab']?></li> 
            <li>Cuenta bancaria: <?= $_SESSION['cuenta_trab']?></li> 
        </ul>
    </body>
</html>