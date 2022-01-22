<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Documento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <h1>Editar Actualizar Actividades</h1>

    <form action="/activities/{{$activity->id}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name" value="{{$activity->name}}"> 
        </div>

        <div>
            <label for="description">Descripción</label>
            <input type="text" name="description" value="{{$activity->description}}"> 
        </div>

        <div>
            <label for="duration">Duración (minutos)</label>
            <input type="text" name="duration" value="{{$activity->duration}}"> 
        </div>

        <div>
            <label for="maximum">Número máximo de participantes</label>
            <input type="text" name="maximum" value="{{$activity->maximum}}"> 
        </div>

        <div>
            <input type="submit" value="Actualizar"> 
        </div>        
    </form>
    <br>
    <a href="/activities" class="btn btn-primary float-right">
                Volver
    </a>    

</body>

</html>