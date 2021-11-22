<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aqua By Rocio</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
  <?php require "app/views/header.php" ?>
      <h1>Login</h1>
      <form method="POST" action="<?= PATH . "/consulta/recogerLogin" ?>">
        <label>Usuario: </label><input type="text" value="" name="usuario" > <br>
        <label>Password: </label><input type="text" value="" name="password"> <br>
        
        <input type="submit" href="name=FromularioController&method=recogerLogin" value="enviar">
    </form>


</body>
</html>

