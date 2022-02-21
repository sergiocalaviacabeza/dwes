<!doctype html>
<html lang="es">

<head>
  <?php require "app/views/parts/head.php" ?>
</head>

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">

    <h1><?php echo ((is_null($jugador)) ? 'Alta ' : 'Edición ') ?>de jugador</h1>
    
    <form method="post" action="/jugador/store" enctype="multipart/form-data">
    <input type="hidden" name="id"
        value="<?php echo ((is_null($jugador)) ? '' : $jugador->id) ?>">
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" class="form-control" value=<?php echo ((is_null($jugador)) ? '' : $jugador->nombre) ?>>
    </div>
    <div class="form-group">
        <label>F. nacimiento</label>
        <input type="text" name="nacimiento" class="form-control" value=<?php echo ((is_null($jugador)) ? '' : $jugador->nacimiento->format('Y-m-d'))?>>
    </div>
    <div class="form-group">
        <label>Puesto</label>
        <select name="puesto" class="form-control">
            <?php echo "<option value='Delantero' " . (($jugador->puesto == 'Delantero') ? 'selected="selected"' : '') . "> Delantero</option>"; ?>
            <?php echo "<option value='Defensa' " . (($jugador->puesto == 'Defensa') ? 'selected="selected"' : '') . "> Defensa</option>"; ?>
            <?php echo "<option value='Centrocampista' " . (($jugador->puesto == 'Centrocampista') ? 'selected="selected"' : '') . "> Centrocampista</option>"; ?>
            <?php echo "<option value='Portero' " . (($jugador->puesto == 'Portero') ? 'selected="selected"' : '') . "> Portero</option>"; ?>
        </select>
    </div>
    <div class="form-group">
        <label>Foto:</label>
          <?php if (!is_null($jugador)) { ?>
              <img src="fotos/"<?= $jugador->id ?>".jpg">
          <?php } ?>
        <input type="file" name="foto" class="form-control" >
    </div>
    <button type="submit" class="btn btn-default">Enviar</button>
    </form>    
  </div>

  </main><!-- /.container -->
  <?php require "app/views/parts/footer.php" ?>


</body>
<?php require "app/views/parts/scripts.php" ?>

</html>