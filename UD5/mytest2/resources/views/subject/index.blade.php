<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignaturas</title>
</head>
<body>

<h1>Lista de Asignaturas
</h1>

<a href="/subjects/create" class="btn btn-primary float-right">
                Añadir Nueva Asignatura
    </a><br><br>

<table border="1">
<tr>
    <th>Código</th>
    <th>Nombre</th>
    <th>Abreviatura</th>
</tr>
@forelse ($subjects as $subject)
<tr>
    <td>{{$subject->id_subject}} </td>
    <td>{{$subject->name}} </td>
    <td>{{$subject->abreviation}} </td>
    <td> <a href="/subjects/{{$subject->id}}">Ver</a></td>
    <td> <a href="/subjects/{{$subject->id}}/edit">Editar</a></td>
</tr>
@empty
<tr>
    <td colspan="3">No hay estudios registrados</td>
</tr>
@endforelse
</table>
<hr>
<br>
<a href="/studies" class="btn btn-primary float-right">
                Volver
    </a>
</body>
</html>