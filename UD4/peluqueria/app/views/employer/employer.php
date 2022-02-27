<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>App MVC</title>
</head>

<body>
    <?php require "app/views/parts/header.php" ?>
    <h1 style="margin-left: 20px;">Lista de trabajadores</h1>
    <p style="margin-left: 20px;"><a href="<?= PATH."/employer/create/"?>" class="btn btn-primary">Nuevo</a></p>
    
    <table border="1" style="margin-left:20px; float:left">
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Categoría</th>
        </tr>
        <?php foreach ($trab as $key => $trabs) { ?>
            <tr>
                <td><?php echo $trabs->nombre ?></td>
                <td><?php echo $trabs->apellidos ?></td>
                <td><?php echo $trabs->correo ?></td>
                <td><?php echo $trabs->telefono ?></td>
                <td><?php echo $trabs->categoria ?></td>
                <td>
                    <a href="<?= PATH . "/employer/edit/" . $trabs->id ?>" class="btn btn-primary">Editar </a>
                </td>
                <td>  
                    <a href="<?= PATH . "/employer/delete/" . $trabs->id ?>" class="btn btn-primary">Borrar </a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>