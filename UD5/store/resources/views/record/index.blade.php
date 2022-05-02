<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discos</title>
</head>
<body>

<h1>Lista de Discos
</h1>

<a href="/records/create" class="btn btn-primary float-right">
                Añadir Nuevo Disco
    </a><br><br>

<table border="1">
<tr>
    <th>Título</th>
    <th>Código</th>
    <th>Año</th>
    <th>Formato</th>
    <th>Estado</th>
</tr>
@forelse ($records as $record)
<tr>
    <td>{{$record->title}} </td>
    <td>{{$record->code}} </td>
    <td>{{$record->year}} </td>
    <td>{{$record->format}} </td>
    <td>{{$record->condition}} </td>
    <td> <a href="/records/{{$record->id}}">Ver</a></td>
    <td> <a href="/records/{{$record->id}}/edit">Editar</a></td>
</tr>
@empty
<tr>
    <td colspan="3">No hay discos registrados</td>
</tr>
@endforelse
</table>
<hr>
<br>
<a href="/records" class="btn btn-primary float-right">
                Volver
    </a>
</body>
</html>