<!doctype html>
<html lang="es">

<head>
  <?php require "app/views/parts/head.php" ?>
</head>

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">
      <h1>Lista de jugadores</h1>
      <p>
      <a href="/jugador/create" class="btn btn-primary">Nuevo</a>
      <a href="/jugador/titulares" class="btn btn-primary">titulares</a>        
      </p>
      <table class="table table-striped table-hover">
        <tr>
          <th>Nombre</th>
          <th>Puesto</th>
          <th>F. nacimiento</th>
          <th></th>
        </tr>
        <?php foreach ($jugadores as $key => $jugador) { ?>
            <tr>
                <td><?php echo $jugador->nombre ?></td>
                <td><?php echo $jugador->puesto ?></td>
                <td><?php echo $jugador->nacimiento ? $jugador->nacimiento->format('Y-m-d') : 'nada' ?></td>
                <td><a href="<?= "/jugador/edit/".$jugador->id ?>">Editar </a></td>
                <td><a href="<?= "/jugador/titular/".$jugador->id ?>">Titular </a></td>
            </tr>
        <?php }?>
          
      </table>
      <form method="post" enctype="multipart/form-data" action="<?= "/jugador/imagen/"?>">
      Subir foto<br><br>
      <input type="file" name="fichero"><br><br>
      <input type="submit" value="Subir"><br><br>
      </form>
    </div>

  </main>


</body>
<?php require "app/views/parts/scripts.php" ?>

</html>