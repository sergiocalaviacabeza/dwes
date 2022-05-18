<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <title>App MVC</title>
  <link type="text/css" rel="stylesheet" href="home.css"/>
</head>

<body>
  <br>
  <header>
  <h2 class="nav"><a class="nav" href="<?php echo PATH."/employer/trabajador" ?>">TRABAJADORES</a></h2> 
  <h1>Aqua By Rocío</h1>
  <h2 class="nav"><a class="nav" href="<?php echo PATH."/login/index" ?>">LOGIN</a></h2> 
  </header>

  <section>
    <h2 id="encabezado">NUESTRO TRABAJO COMBINA ESTILO, VANGUARDIA Y CALIDAD</h2>
    <h4>En Aqua by Rocío nos definen el dominio de las técnicas, el respeto por la naturalidad del cabello y la comodidad del peinado.</h4>
    <img src="fotos/tecnica.jpg" alt="imagen">
    <article>
      <h2>TÉCNICA</h2>
      <p id="parrafo1">La salud de tu piel y cabello es nuestra máxima prioridad a la hora de realizar un
        diagnóstico de estilo, sobre todo en los servicios de color. En cuanto a la forma y el acabado,
        nuestros amplios conocimientos de visagismo nos permiten obtener un resultado con la mayor
        armonía, siempre respetando tus preferencias. Nuestro objetivo es conseguir el estilo que
        buscas, manteniendo y cuidando tu piel y tu cabello sin agresión.
      </p>
    </article>
    
    <article>
      <h2><a class="nav-link" style="color:white; text-decoration:none;" href="<?php echo PATH."/servicios/index" ?>">SERVICIOS</a></h2>
      <div class="servicio">
      <img class="servicios" src="fotos/forma.jpg" alt="imagen">  
      <h3><?php foreach($servicios as $key => $serv){?><?php if($serv->servicio == "FORMA + ESTRUCTURA DE CORTE"){echo $serv->servicio;} }?></h3>
      <hr>
        <p><?php foreach($servicios as $key => $serv){?><?php if($serv->servicio == "FORMA + ESTRUCTURA DE CORTE"){echo $serv->descripcion;}} ?></p>      
      </div>
      <div class="servicio">
        <img class="servicios" style="height:294px;" src="fotos/color.jpg" alt="imagen">
        <h3><?php foreach($servicios as $key => $serv){?><?php if($serv->servicio == "COLOR"){echo $serv->servicio;}} ?></h3>
        <hr>
        <p><?php foreach($servicios as $key => $serv){?><?php if($serv->servicio == "COLOR"){echo $serv->descripcion;}} ?></p>
      </div>
      <div id="servicio1">
        <img id="servicios" src="fotos/tratamientos-capilares.jpg" alt="imagen">
        <h3><?php foreach($servicios as $key => $serv){?><?php if($serv->servicio == "TRATAMIENTOS CAPILARES"){echo $serv->servicio;}} ?></h3>
        <hr>
        <p><?php foreach($servicios as $key => $serv){?><?php if($serv->servicio == "TRATAMIENTOS CAPILARES"){echo $serv->descripcion;}} ?></p>
        <br>
      </div>
      <div class="servicio">
        <img class="servicios" src="fotos/piel.jpg" alt="imagen">
        <h3><?php foreach($servicios as $key => $serv){?><?php if($serv->servicio == "PIEL"){echo $serv->servicio;}} ?></h3>
        <hr>
        <p><?php foreach($servicios as $key => $serv){?><?php if($serv->servicio == "PIEL"){echo $serv->descripcion;}} ?></p>
      </div>
      <div class="servicio">
        <img class="servicios" src="fotos/bodas.jpg" alt="imagen">
        <h3><?php foreach($servicios as $key => $serv){?><?php if($serv->servicio == "BODAS"){echo $serv->servicio;}} ?></h3>
        <hr>
        <p><?php foreach($servicios as $key => $serv){?><?php if($serv->servicio == "BODAS"){echo $serv->descripcion;}} ?></p>
      </div>
    </article>
    <article>
      <h2><?php echo $home->titulo ?></h2>
      <p><?php echo $home->descripcion ?></p>
      <img id="subida"src="<?php echo $home->urls;?>" alt="imagen">
    </article>
    <article id="contacto">
      <hr>
      <h2>CONTACTO</h2>
      
<p>Calle ibón de Catieras 36 (local)<br>
50011 ZARAGOZA<br>
ESPAÑA<br>
–<br>
976 897 698 <br>
–<br>
HORARIO<br>
Lunes - VIERNES: de 09:00 a 20:00<br>
Sábados: de 09:00 A 14:00<br>
Domingo: Cerrado<br><br>
<input type="submit" value="Pedir cita"></p>

    </article>
  </section>

  <footer>
    <h2>ENVÍANOS TUS PREGUNTAS</h2>
    <form action="<?= PATH . "/home/consulta" ?>">
      <label>Nombre:</label><input style="margin-left: 8px;" type="text" value="" name="nombre" required><br>
      <label>Apellidos:</label><input type="text" value="" name="apellidos"><br>
      <label>Correo:</label><input style="margin-left:19px;" type="text" value="" name="correo" required><br>
      <label>Asunto:</label><input style="margin-left:18px;" type="text" value="" name="asunto" required><br>
      <label>Mensaje:</label><input style="margin-left:7px;" type="text" value="" name="mensaje" required><br>
      <input type="submit" value="Enviar" id="boton"> 
    </form>
  </footer>      
</body>

</html>