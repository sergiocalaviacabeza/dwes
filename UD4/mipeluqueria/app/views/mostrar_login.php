<!DOCTYPE html>
<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
    <?php require "app/views/header.php" ?>
        <h1>Datos Login Usuario</h1>
        <ul>
            <li>Usuario: <?= $_SESSION['usuario']?></li>
            <li>Password: <?= $_SESSION['password']?></li> 
            
        </ul>
    </body>
</html>