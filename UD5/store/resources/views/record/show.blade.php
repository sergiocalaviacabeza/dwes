<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discos</title>
</head>
<body>
    <h1>Disco nº {{$record->id}}</h1>


    <ul>
        <li>
            <strong>Título</strong>
            {{ $record->title }}
        </li>
        <li>
            <strong>Código</strong>
            {{ $record->code }}
        </li>
        <li>
            <strong>Año</strong>
            {{ $record->year }}
        </li>
        <li>
            <strong>Formato</strong>
            {{ $record->format }}
        </li>
        <li>
            <strong>Estado</strong>
            {{ $record->condition }}
        </li>
    </ul>
    <a href="/records" class="btn btn-primary float-right">
                Volver
    </a>  
</body>
</html>