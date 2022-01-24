<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Lista de Socios
</h1>

<a href="/users/create" class="btn btn-primary float-right">
                Añadir Nuevo Socio
    </a><br><br>

<table border="1">
<tr>
    <th>DNI</th>
    <th>Nombre completo</th>
    <th>Peso</th>
    <th>Altura</th>
    <th>Fecha de Nacimiento</th>
    <th>Sexo</th>
</tr>
@forelse ($users as $user)
<tr>
    <td>{{$user->dni}} </td>
    <td>{{$user->name}} </td>
    <td>{{$user->weight}} </td>
    <td>{{$user->height}} </td>
    <td>{{$user->date}} </td>
    <td>{{$user->sex}} </td>
    <td> <a href="/users/{{$user->id}}">Ver</a></td>
    <td> <a href="/users/{{$user->id}}/edit">Editar</a></td>
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