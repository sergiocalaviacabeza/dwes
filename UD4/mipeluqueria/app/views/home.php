<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Aqua By Rocio</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
  <?php require "app/views/mostrar.php" ?>
  
  <form method="GET">
        <label>Nombre: </label><input type="text" value="" name="nombre" > <br>
        <label>Apellidos: </label><input type="text" value="" name="apellidos"> <br>
        <label>Correo: </label><input type="text" value="" name="correo" > <br>
        <label>Asunto: </label><input type="text" value="" name="asunto" > <br>
        <label>Mensaje: </label><input type="text" value="" name="mensaje" > <br>
        <input type="submit" href="name=FormularioController&method=index" value="enviar">
    </form>

  <?php require "app/views/header.php" ?>

</body>
</html>

