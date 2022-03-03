<!doctype html>
<html lang="es">

<head>
  <?php require "app/views/parts/head.php" ?>
</head>

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">
      <h1>Módulos matriculados</h1>

      <table class="table table-striped table-hover">
        <tr>
          <th>Código</th>
          <th>Nombre</th>
          <th>Horas</th>
          <th>Plazas disponibles</th>
          <th>Grupo</th>
          <th></th>
        </tr>

        <?php foreach ($modulos as $key => $modulo) { ?>
          <tr>
          <td><?php echo $modulo->codigo ?></td>
          <td><?php echo $modulo->nombre ?></td>
          <td><?php echo $modulo->horas; ?></td>
          <td><?php echo $modulo->plazas; ?></td>
          <td><?php echo $modulo->grupo; ?></td>
          
          <td>
            <a href="/modulo/quitar/<?php echo $modulo->id ?>" class="btn btn-success">quitar </a>
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