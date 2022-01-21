<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Documento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>Creación de Actividades</h1>

    <form action="/activities" method="post">
        @csrf
        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name"> 
        </div>

        <div>
            <label for="description">Descripción</label>
            <input type="text" name="description"> 
        </div>

        <div>
            <label for="duration">Duración (minutos)</label>
            <input type="text" name="duration"> 
        </div>

        <div>
            <label for="maximum">Número máximo de participantes</label>
            <input type="text" name="maximum"> 
        </div>

        <div>
            <input type="submit" value="Crear"> 
        </div>    
    </form><br>
    <a href="/activities" class="btn btn-primary float-right">
                Volver
    </a>    
</body>

</html>
