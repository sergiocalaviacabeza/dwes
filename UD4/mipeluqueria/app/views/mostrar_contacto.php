<!DOCTYPE html>
<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <h1>Datos</h1>
        <ul>
            <li>Nombre: <?= $_SESSION['nombre']?></li>
            <li>Apellidos: <?= $_SESSION['apellidos']?></li>
            <li>Correo: <?= $_SESSION['correo']?></li>
            <li>Asunto: <?= $_SESSION['asunto']?></li>
            <li>Mensaje: <?= $_SESSION['mensaje']?></li>
        </ul>
    </body>
</html>