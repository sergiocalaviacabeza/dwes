<!DOCTYPE html>
<html lang="en">
@extends('layouts.app')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RecordStore</title>
</head>

@section('content')

<style type="text/css">
    body {
        font-family: 'Averta', sans-serif;
    }

    footer {
        background-color: #2b2b2b;
        color: white;
        text-align: center;
    }
</style>

<body>
<div class="container">
    <div class="card-body">

        <h3><strong>Gestión de la Lista de Grupos</strong>
        </h3>

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

        <h4><strong>Búsqueda por título de disco (filtro por palabras)</strong></h4>
        <br>
        <form action="/records/filter" method="get" id="formulario">
            <input type="text" id="filtro" name="filtro">
            <input type="submit">
        </form>
        <hr>
        <br>
        <h4><strong>Búsqueda por nombre grupo (filtro por palabras)</strong></h4>
        <br>
        <form action="/bands/filter2" method="get" id="formulario">
            <input type="text" id="filtro" name="filtro">
            <input type="submit">
        </form>
    </div>
    <hr>
    <a href="/home" class="btn btn-primary float-right">
    Volver a HOME - INICIO
</a>
</div>
</div>
<br>
</div>
</div>
</body>

<footer>
    <div class="card-body">
        <h5><strong>RECORDSTORE</strong></h5>
        <h6>C/ Independencia - Zaragoza</h6>
    <h6>976757070 - info@recordstore.com</h6>
        <img src="https://www.recordstoreday.es/images/logos/logo-RSDS-HalfVinyl-small.jpg">
        
    </div>

</footer>

</html>
@endsection