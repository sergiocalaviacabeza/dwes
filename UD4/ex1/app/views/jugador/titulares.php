<!doctype html>
<html lang="es">

<head>
  <?php require "app/views/parts/head.php" ?>
</head>

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">
      <h1>Titulares</h1>

      <table class="table table-striped table-hover">
        <tr>
          <th>Nombre</th>
          <th>Puesto</th>
          <th>F. nacimiento</th>
          <th></th>
        </tr>
        <?php foreach ($nombres as $key => $nombre) { ?>
            <tr>
                <td><?php echo $nombres[$key] ?></td>
                <td><?php echo $puestos[$key] ?></td>
                <td><?php echo $nacimientos[$key] ? $nacimientos[$key]->format('Y-m-d') : 'nada'?></td>
                <td><a href="<?= "/jugador/quitar/".$key ?>">Quitar</a></td>
            </tr>
        <?php }?>
      </table>

    </div>

  </main>
  <?php require "app/views/parts/footer.php" ?>


</body>
<?php require "app/views/parts/scripts.php" ?>

</html>