<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Documento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
        <h1>Actualización de estudios</h1>

        <form action="/studies/{{$study->id}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div>
            <label for="code">Código</label>
            <input type="text" name="code" value="{{$study->code}}"> 
        </div>

        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name" value="{{$study->name}}"> 
        </div>

        <div>
            <label for="description">Descripción</label>
            <input type="text" name="description" value="{{$study->description}}"> 
        </div>

        <div>
            <input type="submit" value="Actualizar"> 
        </div>        
        </form>
        </div>
    </div>

</div>
@endsection