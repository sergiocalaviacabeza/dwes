<!doctype html>
<html lang="es">

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">

    <h1>Edición de Servicios</h1>

    <form method="post" action="<?= PATH."/servicios/update"?>">
        <input type="hidden" name="id"
        value="<?php echo $servicio->id ?>">

    <div class="form-group">
        <label>ID</label>
        <input type="text" name="id" class="form-control"
        value="<?php echo $servicio->id ?>"
        >
    </div>
    <div class="form-group">
        <label>SERVICIO</label>
        <input type="text" name="servicio" class="form-control"
        value="<?php echo $servicio->servicio ?>"
        >
    </div>
    <div class="form-group">
        <label>DESCRIPCION</label>
        <input type="text" name="descripcion" class="form-control"
        value="<?php echo $servicio->descripcion ?>"
        >
    </div>
    <div class="form-group">
        <label>TIEMPO</label>
        <input type="text" name="tiempo" class="form-control"
        value="<?php echo $servicio->tiempo ?>"
        >
    </div>
    <div class="form-group">
        <label>PRECIO</label>
        <input type="text" name="precio" class="form-control"
        value="<?php echo $servicio->precio ?>"
        >
    </div>
    <button type="submit" class="btn btn-default">Enviar</button>
    </form>
  </div>

  </main>
</body>

</html>