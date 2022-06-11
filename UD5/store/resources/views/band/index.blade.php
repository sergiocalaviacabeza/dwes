@extends('layouts.app')

@section('content')

<style type="text/css">   
        body {
        font-family: 'Averta', sans-serif;
        }
</style>

<div class="container">
    <div class="card-body">

        <h1>Lista de Grupos
        </h1>

        <a href="/bands/create" class="btn btn-primary float-right">
            Añadir Nuevo Grupo
        </a>
        <br>
        <hr>

        <table class="table table-striped">
            <tr>
                <th>Nombre</th>
                <th>Estilo</th>
                <th>País</th>
                <th></th>
                <th></th>
            </tr>
            @forelse ($bands as $band)
            <tr>
                <td>{{$band->name}} </td>
                <td>{{$band->style}} </td>
                <td>{{$band->country}} </td>
                <td> <a href="/bands/{{$band->id}}" class="btn btn-success float-right">Ver Discos Grupo</a></td>
                <td> <a href="/bands/{{$band->id}}/edit" class="btn btn-success float-right">Editar Datos Grupo</a></td>
            </tr>
            <tr>
            </tr>
            @empty
            <tr>
                <td colspan="3">No hay grupos registrados</td>
            </tr>
            @endforelse
        </table>
        <hr>
        <a href="/records/create" class="btn btn-primary float-right">Insertar Nuevo Disco</a>
        <br>
        <hr>
        <a href="/records" class="btn btn-primary float-right">Ver Catálogo de Discos</a>

        <hr>

        <hr>
        <br>

        <h4>Búsqueda por título de disco (filtro por palabras)</h4>

        <br><br>
        <form action="/records/filter" method="get" id="formulario">
            <input type="text" id="filtro" name="filtro">
            <input type="submit">
            <br><br>
        </form>
        <hr>
        <br><br>
        <h4>Búsqueda por nombre de grupo (filtro por palabras)</h4>
        <br><br>
        <form action="/bands/filter2" method="get" id="formulario">
            <input type="text" id="filtro" name="filtro">
            <input type="submit">
        </form>
        <br>
    </div>
</div>
</div>
<hr>
<br>
<a href="/home" class="btn btn-primary float-right">
            Volver a HOME - INICIO
        </a>
</div>
</div>
@endsection