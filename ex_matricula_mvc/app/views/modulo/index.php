<!doctype html>
<html lang="es">

<head>
  <?php require "app/views/parts/head.php" ?>
</head>

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">
      <h1>Lista de módulos</h1>
      <p>
      <a href="/modulo/create" class="btn btn-primary">Nuevo</a>
      <a href="/modulo/matriculaModulos" class="btn btn-primary">Ver matrícula</a>        
      </p>
      <hr>
        <h2>Búsqueda de módulos</h2>
        <form action="/modulo" method="get" id="formulario">
            <input type="text" id="filtro" name="filtro">
            <input type="submit">
        </form>
      <hr>
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
          <td><?php echo $modulo->nombre; ?></td>
          <td><?php echo $modulo->horas; ?></td>
          <td><?php echo $modulo->plazas; ?></td>
          <td><?php echo $modulo->grupo; ?></td>
          
          <td>
            <a href="/modulo/edit/<?php echo $modulo->id ?>" class="btn btn-primary">Editar </a>
            <a href="/modulo/matricular/<?php echo $modulo->id ?>" class="btn btn-success">Matrícula </a>
          </td>
          </tr>
        <?php } ?>
      </table>


    </div>

  </main><!-- /.container -->


</body>
<?php require "app/views/parts/scripts.php" ?>

</html>