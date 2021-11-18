<!doctype html>
<html lang="es">

<head>
  <?php require "app/views/parts/head.php" ?>
</head>

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">
      <h1>Detalle del servicio <?php echo $servicios->id ?></h1>
        <ul>
            <li><strong>ID: </strong><?php echo $servicios->id ?></li>
            <li><strong>SERVICIO: </strong><?php echo $servicios->servicio ?></li>
            <li><strong>DESCRIPCION: </strong><?php echo $servicios->descripcion ?></li>
            <li><strong>TIEMPO: </strong><?php echo $servicios->tiempo ?></li>
            <li><strong>PRECIO: </strong><?php echo $servicios->precio ?></li>
            
        </ul>
    </div>

  </main><!-- /.container -->
  <?php require "app/views/parts/footer.php" ?>


</body>
<?php require "app/views/parts/scripts.php" ?>

</html>