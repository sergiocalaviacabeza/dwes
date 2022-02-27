<!doctype html>
<html lang="es">

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">

    <h1>Alta de nuevo Servicio</h1>
    
    <form method="post" action="<?= PATH."/servicios/store"?>">

    <div class="form-group">
        <label>ID</label>
        <input type="text" name="id" class="form-control" required>
    </div>
    <div class="form-group">
        <label>SERVICIO</label>
        <input type="text" name="servicio" class="form-control" required>
    </div>
    <div class="form-group">
        <label>DESCRIPCION</label>
        <input type="text" name="descripcion" class="form-control" required>
    </div>
    <div class="form-group">
        <label>TIEMPO</label>
        <input type="number" name="tiempo" class="form-control" required>
    </div>
    <div class="form-group">
        <label>PRECIO</label>
        <input type="number" name="precio" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-default">Enviar</button>
    </form>    
  </div>

  </main>

</body>

</html>