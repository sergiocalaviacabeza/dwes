<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Bienvenido <?= $_COOKIE['color'] ?></h1>
  
  <hr>
  <h2>Cambiar el color del fondo de la página</h2>
  <form action="?method=home" method="post">
    <label for="home">Color</label>
    <input type="text" name="home">
    
    <input type="submit" value="Aplicar Color">
  </form>
  
</body>
</html>