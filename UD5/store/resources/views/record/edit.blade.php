<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Edición</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <h1>Editar Actualizar Disco</h1>

    <form action="/records/{{$record->id}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div>
            <label for="title">Título</label>
            <input type="text" name="title" value="{{$record->title}}"> 
        </div>

        <div>
            <label for="code">Código</label>
            <input type="text" name="code" value="{{$record->code}}"> 
        </div>

        <div>
            <label for="year">Año</label>
            <input type="text" name="year" value="{{$record->year}}"> 
        </div>

        <div>
            <label for="format">Formato</label>
            <input type="text" name="format" value="{{$record->format}}"> 
        </div>

        <div>
            <label for="condition">Estado</label>
            <input type="text" name="condition" value="{{$record->condition}}"> 
        </div>

        <div>
            <label for="price">Precio</label>
            <input type="text" name="price" value="{{$record->price}}"> 
        </div>

        <div>
            <input type="submit" value="Actualizar"> 
        </div>        
    </form>
    <br>
    <a href="/records" class="btn btn-primary float-right">
                Volver
    </a>    

</body>

</html>