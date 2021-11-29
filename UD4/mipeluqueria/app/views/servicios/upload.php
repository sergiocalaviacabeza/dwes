<!doctype html>
<html lang="es">

<head>
  <?php require "app/views/parts/head.php" ?>
</head>

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">

    <h1>Subida archivos</h1>
    
      <form method="post" action="<?= PATH."/servicios/uploading"?>">

          Selecciona las fotos para subir<br><br>
        <input type="file" name="fichero1"><br><br>
        <input type="file" name="fichero2"><br><br>

        <input type="submit" value="subir ficheros"><br><br>
      </form>
    
    </div>

  </main><!-- /.container -->
  <?php require "app/views/parts/footer.php" ?>


</body>
<?php require "app/views/parts/scripts.php" ?>

</html>