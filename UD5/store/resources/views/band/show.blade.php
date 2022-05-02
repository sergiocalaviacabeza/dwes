<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupos</title>
</head>
<body>
    <h1>Grupo nº {{$band->id}}</h1>


    <ul>
        <li>
            <strong>Nombre</strong>
            {{ $band->name }}
        </li>
        <li>
            <strong>Estilo</strong>
            {{ $band->style }}
        </li>
        <li>
            <strong>País</strong>
            {{ $band->country }}
        </li>
        <hr>
        <h3>Discos a la venta</h3>

        @foreach($band->records as $record)
            <li>{{$record->title}}</li>
        @endforeach
        
    </ul>
    <a href="/bands" class="btn btn-primary float-right">
                Volver
    </a>  
</body>
</html>