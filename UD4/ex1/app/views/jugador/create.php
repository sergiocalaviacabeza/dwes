<!doctype html>
<html lang="es">

<head>
  <?php require "app/views/parts/head.php" ?>
</head>

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">

    <h1>Título</h1>
    
    <form method="post" action="<?php echo isset($jugador->id) ? "/jugador/store": "/jugador/insert" ?>" enctype="">
    <input type="hidden" name="id" value="<?php echo $jugador->id ?>">
    <label>Nombre: </label><input type="text" value="<?php if(isset($jugador->id)){echo $jugador->nombre;}else{echo "";} ?>" name="nombre" required> <br>
    <label>Puesto: <select name="puesto" id="pregunta2">
            <option value="Portero"> Portero </option>
            <option value="Defensa"> Defensa</option>
            <option value="Centrocampista"> Centrocampista</option>
            <option value="Delantero"> Delantero</option>
        </select> <br>
    <label>Nacimiento: </label><input type="text" value="<?php if(isset($jugador->id)){echo $jugador->nacimiento ? $jugador->nacimiento->format('Y-m-d') : 'nada';}else{echo "";} ?>" name="nacimiento" required> <br>
    <button type="submit" class="btn btn-default">Enviar</button>
    </form>    
  </div>

  </main>
  <?php require "app/views/parts/footer.php" ?>

</body>
<?php require "app/views/parts/scripts.php" ?>

</html>