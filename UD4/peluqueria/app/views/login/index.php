<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>App MVC</title>
</head>

<body>

    <?php require "app/views/parts/header.php" ?>

    <form method="POST" style="margin-left: 20px; float:left" action="<?= PATH . "/login/login" ?>">
        <label style="font-size: 20px;">Haznos una pregunta:</label><br><br>
        <label>Usuario: </label><input type="text" value="" name="users" required> <br>
        <label>Contraseña: </label><input type="text" value="" name="passwords" required> <br>
        <input type="submit" value="Enviar">
    </form>

</body>

</html>