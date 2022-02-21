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

        <?php foreach ($titulares as $key => $jugador) { ?>
          <tr>
          <td><?php echo $jugador->nombre ?></td>
          <td><?php echo $jugador->puesto; ?></td>
          <td><?php echo $jugador->nacimiento ? $jugador->nacimiento->format('d-m-Y') : 'nonato' ?></td>
          <td>
            <a href="/jugador/quitar/<?php echo $jugador->id ?>" class="btn btn-success">quitar </a>
          </td>
          </tr>
        <?php } ?>
      </table>

    </div>

  </main><!-- /.container -->
  <?php require "app/views/parts/footer.php" ?>


</body>
<?php require "app/views/parts/scripts.php" ?>

</html>