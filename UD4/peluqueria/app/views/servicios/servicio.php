<!doctype html>
<html lang="es">

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">
      <h1 style="margin-left: 20px;">Lista de servicios</h1>
      <p style="margin-left: 20px;"><a href="<?= PATH."/servicios/create/"?>" class="btn btn-primary">Nuevo</a></p>
      <table border="1" class="table table-striped table-hover" style="margin-left: 20px;">
        <tr>
          <th>ID</th>
          <th>SERVICIO</th>
          <th>DESCRIPCION</th>
          <th>TIEMPO</th>
          <th>PRECIO</th>
        </tr>
       
        <?php 
        
        // var_dump ($servicios); exit();    
        
        foreach ($servicios as $key => $servicio) { ?>
          <tr>
          <td><?php echo $servicio->id ?></td>
          <td><?php echo $servicio->servicio ?></td>
          <td><?php echo $servicio->descripcion ?></td>
          <td><?php echo $servicio->tiempo ?></td>
          <td><?php echo $servicio->precio ?></td>
          <td>
            <a href="<?= PATH."/servicios/edit/".$servicio->id ?>" class="btn btn-primary">Editar </a>
          </td>
          <td>
            <a href="<?= PATH."/servicios/delete/".$servicio->id ?>" class="btn btn-primary">Borrar </a>
          </td>
          </tr>
        <?php } ?>
      </table>

    </div>

        </main>


</body>

</html>