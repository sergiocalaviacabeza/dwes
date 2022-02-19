<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Lista de Estudios
</h1>

<a href="/studies/create" class="btn btn-primary float-right">
                Añadir Nuevo Estudio
    </a><br><br>

<table border="1">
<tr>
    <th>Código</th>
    <th>Nombre</th>
    <th>Descripción</th>
</tr>
@forelse ($studies as $study)
<tr>
    <td>{{$study->code}} </td>
    <td>{{$study->name}} </td>
    <td>{{$study->description}} </td>
    <td> <a href="/studies/{{$study->id}}">Ver</a></td>
    <td> <a href="/studies/{{$study->id}}/edit">Editar</a></td>
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