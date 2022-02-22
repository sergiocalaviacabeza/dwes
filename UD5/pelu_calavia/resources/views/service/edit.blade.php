<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Documento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <h1>Editar Actualizar Servicios</h1>

    <form action="/services/{{$service->id}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div>
            <label for="code">Código</label>
            <input type="text" name="code" value="{{$service->code}}"> 
        </div>

        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name" value="{{$service->name}}"> 
        </div>

        <div>
            <label for="details">Detalles</label>
            <input type="text" name="details" value="{{$service->details}}"> 
        </div>

        <div>
            <label for="price">Precio</label>
            <input type="text" name="price" value="{{$service->price}}"> 
        </div>

        <div>
            <label for="time">Tiempo</label>
            <input type="text" name="time" value="{{$service->time}}"> 
        </div>

        <div>
            <input type="submit" value="Actualizar"> 
        </div>        
    </form>
    <br>
    <a href="/services" class="btn btn-primary float-right">
                Volver
    </a>    

</body>

</html>