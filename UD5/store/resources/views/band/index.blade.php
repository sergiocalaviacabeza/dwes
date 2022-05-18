@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

<h1>Lista de Grupos
</h1>

<a href="/bands/create" class="btn btn-primary float-right">
                Añadir Nuevo Grupo
    </a>
    <br>
    <hr>

<table border="1">
<tr>
    <th>Nombre</th>
    <th>Estilo</th>
    <th>País</th>
</tr>
@forelse ($bands as $band)
<tr>
    <td>{{$band->name}} </td>
    <td>{{$band->style}} </td>
    <td>{{$band->country}} </td>
    <td> <a href="/bands/{{$band->id}}">Ver</a></td>
    <td> <a href="/bands/{{$band->id}}/edit">Editar</a></td>
</tr>
<tr>

   
    
</tr>
@empty

@endforelse
</table>
<hr>
<a href="records/create" class="btn btn-primary float-right">Crear Disco</a>
<br>
<hr>
<a href="records" class="btn btn-primary float-right">Ver Discos</a>

<hr>
        <h2>Búsqueda de discos por nombre</h2>
       
        <br><br>
        <form action="/records/filter" method="get" id="formulario">
            <input type="text" id="filtro" name="filtro">
            <input type="submit">
        </form>
        <br>
        

        </div>
    </div>
</div>        
<hr>
<br>
</div>
</div>
@endsection