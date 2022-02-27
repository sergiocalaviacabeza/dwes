<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <title>App MVC</title>
</head>

<body>

    <?php require "app/views/parts/header.php" ?>

    <form method="POST" enctype="multipart/form-data" action="<?= PATH."/home/update"?>" style="margin-left:20px;">
        <label>Titulo: </label><input type="text" name="titulo" value="<?php echo $home->titulo ?>"><br>
        <label>Descripción: </label> <input type="text" name="descripcion" value="<?php echo $home->descripcion ?>" style="width:500px; height:300px;"><br>
        <input type="file" name="foto"><br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>