<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Servicio nº {{$service->id}}</h1>


    <ul>
        <li>
            <strong>Código</strong>
            {{ $service->code }}
        </li>
        <li>
            <strong>Nombre</strong>
            {{ $service->name }}
        </li>
        <li>
            <strong>Descripcion</strong>
            {{ $service->details }}
        </li>
        <li>
            <strong>Precio</strong>
            {{ $service->price }}
        </li>
        <li>
            <strong>Tiempo</strong>
            {{ $service->time }}
        </li>

    </ul>
    <a href="/services" class="btn btn-primary float-right">
                Volver
    </a>  
</body>
</html>