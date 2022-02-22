<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios</title>
</head>
<body>

<h1>Lista de Servicios
</h1>

<a href="/services/create" class="btn btn-primary float-right">
                Añadir Nuevo Servicio
    </a><br><br>

<table border="1">
<tr>
    <th>Código</th>
    <th>Nombre</th>
    <th>Detalles</th>
    <th>Precio</th>
    <th>Tiempo</th>
</tr>
@forelse ($services as $service)
<tr>
    <td>{{$service->code}} </td>
    <td>{{$service->name}} </td>
    <td>{{$service->details}} </td>
    <td>{{$service->price}} </td>
    <td>{{$service->time}} </td>
    <td> <a href="/services/{{$service->id}}">Ver</a></td>
    <td> <a href="/services/{{$service->id}}/edit">Editar</a></td>
    <td> <a href="/services/{{$service->id}}/destroy">Eliminar</a></td>
</tr>
<tr>

</tr>
@empty

@endforelse
</table>
<hr>

</body>
</html>