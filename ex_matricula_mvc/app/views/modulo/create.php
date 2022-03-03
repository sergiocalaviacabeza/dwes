<!doctype html>
<html lang="es">

<head>
  <?php require "app/views/parts/head.php" ?>
</head>

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
  <div class="starter-template">

  <h1>Alta de módulos</h1>

  <form method="post" action="/modulo/store" enctype="multipart/form-data">
  
    <input type="hidden" name="id"
        value="<?php echo ((is_null($modulo)) ? '' : $modulo->id) ?>">
        
    <div class="form-group">
        <label>Código</label>
        <input type="text" name="codigo" class="form-control" value=<?php echo ((is_null($modulo)) ? '' : $modulo->codigo) ?>>
    </div>      
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" class="form-control" value=<?php echo ((is_null($modulo)) ? '' : $modulo->nombre) ?>>
    </div>

    <div class="form-group">
        <label>Horas</label>
        <input type="text" name="horas" class="form-control" value=<?php echo ((is_null($modulo)) ? '' : $modulo->horas) ?>>
    </div>

    <div class="form-group">
        <label>Plazas</label>
        <input type="text" name="plazas" class="form-control" value=<?php echo ((is_null($modulo)) ? '' : $modulo->plazas) ?>>
    </div>

    <div class="form-group">
        <label>Grupo</label>
        <select name="grupo" class="form-control">
            <?php echo "<option value='DAW1' " . (($modulo->grupo == 'DAW1') ? 'selected="selected"' : '') . "> DAW1</option>"; ?>
            <?php echo "<option value='DAW2' " . (($modulo->grupo == 'DAW2') ? 'selected="selected"' : '') . "> DAW2</option>"; ?>
            <?php echo "<option value='DAM2' " . (($modulo->grupo == 'DAM2') ? 'selected="selected"' : '') . "> DAM2</option>"; ?> 
        </select>
    </div>
    <button type="submit" class="btn btn-default">Enviar</button>
  </form>   
  
  </div>

  </main><!-- /.container -->
  <?php require "app/views/parts/footer.php" ?>


</body>
<?php require "app/views/parts/scripts.php" ?>

</html>