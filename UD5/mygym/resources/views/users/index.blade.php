<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Lista de Actividades
</h1>

<a href="/users/create" class="btn btn-primary float-right">
                Añadir Nueva Actividad
    </a><br><br>

<table border="1">
<tr>
    <th>Nombre</th>
    <th>Descripción</th>
    <th>Duración (minutos)</th>
    <th>Máximo participantes</th>
</tr>
@forelse ($activities as $activity)
<tr>
    <td>{{$activity->name}} </td>
    <td>{{$activity->description}} </td>
    <td>{{$activity->duration}} </td>
    <td>{{$activity->maximum}} </td>
    <td> <a href="/activities/{{$activity->id}}">Ver</a></td>
    <td> <a href="/activities/{{$activity->id}}/edit">Editar</a></td>
</tr>
@empty
<tr>
    <td colspan="3">No hay estudios registrados</td>
</tr>
@endforelse
</table>
<br>
<a href="/" class="btn btn-primary float-right">
                Inicio
    </a>
</body>
</html>