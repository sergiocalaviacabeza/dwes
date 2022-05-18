<!doctype html>
<html lang="es">

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template" style="margin-left: 20px;">
      <h1>Detalle del Trabajador </h1>
        <ul>
            <li><strong>Nombre: </strong><?php echo $trab->nombre ?></li>
            <li><strong>Apellidos: </strong><?php echo $trab->apellidos ?></li>
            <li><strong>Correo: </strong><?php echo $trab->correo ?></li>
            <li><strong>Telefono: </strong><?php echo $trab->telefono ?></li>
            <li><strong>Categoría: </strong><?php echo $trab->categoria ?></li>
        </ul>

        <h2>Servicios que realiza</h2>
        <ul>
        <?php  
        foreach($trab_serv as $key => $serv){
          foreach ($servicio as $key => $servicios) {
            if($serv->employee_id==$trab->id){
            if($serv->service_id==$servicios->id){?>
              <li><?php echo $servicios->servicio; ?></li>
        <?php }}}} ?>   
        </ul>
    </div>

  </main>
</body>

</html>