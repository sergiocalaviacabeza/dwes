<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej3</title>
</head>

<body>
    <h2>Saludos a...</h2>
    <form action="" method="post">
        <label>Nombre</label>
        <input type="text" value="<?php echo $_POST['nombre']  ?>" name="nombre"><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    if (isset($_POST['nombre']) && !empty($_POST['nombre'])  ) {
      if (strlen($_POST['nombre']) >= 3) {
        echo "<hr><pre>";
        echo "Bienvendo " . $_POST['nombre'];
      } else {
        echo "Longitud mínima 3";
      }
  
    } else {
        echo "El nombre es obligatorio";
    };
    ?>
</body>

</html>