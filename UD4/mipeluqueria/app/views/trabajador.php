<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aqua By Rocio</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
  <?php require "app/views/header.php" ?>
      <h1>Formulario Ficha de Trabajadores</h1>
      <form method="POST" action="<?= PATH . "/formulario/recogerTrabajador" ?>>
        <label>Nombre: </label><input type="text" value="" name="nombre_trab" > <br>
        <label>Apellidos: </label><input type="text" value="" name="apellidos_trab"> <br>
        <label>Teléfono: </label><input type="text" value="" name="telefono_trab" > <br>
        <label>Categoría: </label><input type="text" value="" name="cat_trab" > <br>
        <label>Cuenta bancaria: </label><input type="text" value="" name="cuenta_trab" > <br>
        <input type="submit" href="name=FromularioController&method=recogerTrabajador" value="enviar">
    </form>


</body>
</html>

