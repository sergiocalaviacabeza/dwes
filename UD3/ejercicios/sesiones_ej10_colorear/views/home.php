<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body style = "background-color: <?= $_COOKIE['color']?>">
  <h1>Hecho!</h1>
  
  <hr>
  <h2>Cambiado el color del fondo de la página</h2>
  <form action="?method=cambio" method="post">
    <input type="submit" value="volver">
  </form>
  
</body>
</html>