<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudios</title>
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
<tr>

   
    
</tr>
@empty

@endforelse
</table>
<hr>
<a href="subjects/create" class="btn btn-primary float-right">Crear Asignatura</a>
<br><br>
<a href="subjects" class="btn btn-primary float-right">Ver Asignaturas</a>

<hr>
        <h2>Búsqueda de estudios por nombre</h2>
       
        <br><br>
        <form action="/studies/filter" method="get" id="formulario">
            <input type="text" id="filtro">
            <input type="submit">
        </form>
        <br>
        

        </div>
    </div>
</div>        
<hr>
<br>
<a href="/" class="btn btn-primary float-right">
                Inicio
    </a>
</body>
</html>