<!doctype html>
<html lang="es">

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container" style="margin-left:20px;">
    <div class="starter-template">

    <h1>Edición de empleado</h1>

    <form method="post" action="<?= PATH."/employer/update"?>">
        <input type="hidden" name="id" value="<?php echo $trab->id ?>">
    <div class="form-group">
        <label>Nombre: </label>
        <input type="text" name="nombre" value="<?php echo $trab->nombre ?>">
    </div>
    <div class="form-group">
        <label>Apellidos: </label>
        <input type="text" name="apellidos" value="<?php echo $trab->apellidos ?>">
    </div>
    <div class="form-group">
        <label>Servicio: </label>
        <select class="custom-select"  name="type_id[]" multiple>
              <?php
              foreach($servicioType  as $key => $servicio) { 
                $selected = $trab->id_servicio == $servicio->id ? 'selected' : '';?>
                <option value="<? echo $servicio->id ?>" <?= $selected ?>> <?php echo $servicio->servicio?></option>
              <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label>Correo: </label>
        <input type="text" name="correo" value="<?php echo $trab->correo ?>">
    </div>
    <div class="form-group">
        <label>Telefono: </label>
        <input type="text" name="telefono" value="<?php echo $trab->telefono ?>">
    </div>
    <div class="form-group">
        <label>Categoría: </label>
        <input type="text" name="categoria" value="<?php echo $trab->categoria ?>">
    </div>
    <button type="submit" >Enviar</button>
    </form>
  </div>

  </main>
</body>

</html>