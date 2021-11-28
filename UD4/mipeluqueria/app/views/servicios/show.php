<!doctype html>
<html lang="es">

<head>
  <?php require "app/views/parts/head.php" ?>
</head>

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">
      <h1>Detalle del servicio <?php echo $servicio->id ?></h1>
        <ul>
            <li><strong>ID: </strong><?php echo $servicio->id ?></li>
            <li><strong>SERVICIO: </strong><?php echo $servicio->servicio ?></li>
            <li><strong>DESCRIPCION: </strong><?php echo $servicio->descripcion ?></li>
            <li><strong>TIEMPO: </strong><?php echo $servicio->tiempo ?></li>
            <li><strong>PRECIO: </strong><?php echo $servicio->precio ?></li>
            
        </ul>
    </div>

  </main><!-- /.container -->
  <?php require "app/views/parts/footer.php" ?>


</body>
<?php require "app/views/parts/scripts.php" ?>

</html>