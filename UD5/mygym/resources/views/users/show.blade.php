<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Actividades mygym</h1>

    <ul>
        <li>
            <strong>Nombre Actividad</strong>
            {{ $activity->name }}
        </li>
        <li>
            <strong>Descripción</strong>
            {{ $activity->description }}
        </li>
        <li>
            <strong>Duración (minutos)</strong>
            {{ $activity->duration }}
        </li>
        <li>
            <strong>Número máximo de participantes</strong>
            {{ $activity->maximum }}
        </li>
    </ul>
    <br>
    <a href="/activities" class="btn btn-primary float-right">
                Volver
    </a>    
</body>
</html>