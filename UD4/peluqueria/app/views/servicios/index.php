<!doctype html>
<html lang="es">

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template" style="margin-left: 20px;">
      <h1>Lista de servicios</h1>
      <table border="1" class="table table-striped table-hover">
        <tr>
          <th>SERVICIO</th>
          <th>DESCRIPCION</th>
          <th>TIEMPO</th>
          <th>PRECIO</th>
          <th></th>
        </tr>
       
        <?php    
        
        foreach ($servicios as $key => $servicio) { ?>
          <tr>
          <td><?php echo $servicio->servicio ?></td>
          <td><?php echo $servicio->descripcion ?></td>
          <td><?php echo $servicio->tiempo ?></td>
          <td><?php echo $servicio->precio ?></td>
          <td>
            <a href="<?= PATH."/servicios/show/".$servicio->id ?>" class="btn btn-primary">Ver </a>
          </td>
          </tr>
        <?php } ?>
      </table>

    </div>

        </main>


</body>

</html>