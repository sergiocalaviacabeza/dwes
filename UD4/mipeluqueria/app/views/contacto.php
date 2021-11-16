<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aqua By Rocio</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
  <?php require "app/views/header.php" ?>
      <h1>Formulario de Contacto Clientes</h1>
      <form method="POST" action="<?= PATH . "/formulario/recogerConsulta" ?>">
        <label>Nombre: </label><input type="text" value="" name="nombre"> <br>
      <label>Apellidos: </label><input type="text" value="" name="apellidos"> <br>
      <label>Correo: </label><input type="text" value="" name="correo"> <br>
      <label>Asunto: </label><input type="text" value="" name="asunto"> <br>
      <label>Mensaje: </label><input type="text" value="" name="mensaje"> <br>
      <input type="submit" value="enviar">
    </form>


</body>
</html>

