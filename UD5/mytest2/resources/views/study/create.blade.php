<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Documento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>Creación de Registro de Estudios</h1>

    <form action="/studies" method="post">
        @csrf
        <div>
            <label for="code">Código</label>
            <input type="text" name="code"> 
        </div>
        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name"> 
        </div>

        <div>
            <label for="description">Descripción</label>
            <input type="text" name="description"> 
        </div>

        <div>
            <input type="submit" value="Crear"> 
        </div>    
    </form><br>
    <a href="/studies" class="btn btn-primary float-right">
                Volver
    </a>    
</body>

</html>
