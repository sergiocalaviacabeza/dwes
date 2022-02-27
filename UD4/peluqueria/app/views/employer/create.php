<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <title>App MVC</title>
</head>

<body>

  <?php require "app/views/parts/header.php" ?>

  <form method="POST" style="margin-left: 20px; float:left;" action="<?= PATH . "/employer/guardarTrabajador" ?>">
    <label>Nombre: </label><input type="text" value="" name="nombre_trab" required> <br>
    <label>Apellidos: </label><input type="text" value="" name="apellidos_trab" required> <br>
    <label>Servicio: </label><select name="type_id[]" multiple>
      <?php 
      foreach($servicioType as $key => $servicio){?>
        <option value="<? echo $servicio->id?>"><?php echo $servicio->servicio?></option>
      <?php } ?>
    </select> <br>
    <label>Correo: </label><input type="text" value="" name="correo_trab" required> <br>
    <label>Telefono: </label><input type="text" value="" name="telefono_trab" required> <br>
    <label>Categoria: </label><input type="text" value="" name="cat_trab" required> <br>
    <input type="submit" value="Enviar">
  </form>

</body>

</html>