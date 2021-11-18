<!doctype html>
<html lang="es">

<head>
  <?php require "app/views/parts/head.php" ?>
</head>

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">
      <h1>Lista de servicios</h1>

      <table class="table table-striped table-hover">
        <tr>
          <th>ID</th>
          <th>SERVICIO</th>
          <th>DESCRIPCION</th>
          <th>TIEMPO</th>
          <th>PRECIO</th>
          <th></th>
        </tr>

        <?php foreach ($servicios as $key => $employee) { ?>
          <tr>
          <td><?php echo $employee->id ?></td>
          <td><?php echo $employee->servicio ?></td>
          <td><?php echo $employee->descripcion ?></td>
          <td><?php echo $employee->tiempo ?></td>
          <td><?php echo $employee->precio ?></td>
          <td>
            <a href="<?= PATH."/user/show/".$user->id ?>" class="btn btn-primary">Ver </a>
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