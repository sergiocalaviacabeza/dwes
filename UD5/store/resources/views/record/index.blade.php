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

    footer{
        background-color: #2b2b2b;
        color: white;
        text-align: center;
    }
</style>

<body>
    <div class="container">
        <div class="card-body">

            <h3><strong>CATÁLOGO RECORDSTORE - Lista de Discos a la venta</strong>
            </h3>

            <a href="/records/create" class="btn btn-success float-right">
                Añadir Nuevo Disco
            </a><br><br>

            <table class="table table-striped">
                <tr>
                    <th>Grupo</th>
                    <th>Título</th>
                    <th>Código</th>
                    <th>Año</th>
                    <th>Formato</th>
                    <th>Estado</th>
                    <th>Precio (€)</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                @forelse ($records as $record)
                <tr>
                    <td>{{$record->band->name}} </td>
                    <td>{{$record->title}} </td>
                    <td>{{$record->code}} </td>
                    <td>{{$record->year}} </td>
                    <td>{{$record->format}} </td>
                    <td>{{$record->condition}} </td>
                    <td>{{$record->price}} </td>
                    <!--<td> <a href="/orders/{{$record->id}}" class="btn btn-success float-right">cesto</a></td>-->
                    <td> <a href="/records/{{$record->id}}/edit" class="btn btn-success float-right">Editar</a></td>
                    <td> <a href="/records/{{$record->id}}" class="btn btn-success float-right">AÑADIR CESTA</a></td>
                    <td> <a href="/orders" class="btn btn-success float-right">VER CESTA</a></td>
                </tr>
                @empty
                <tr>
                    <td colspan="3">No hay discos registrados</td>
                </tr>
                @endforelse
            </table>
            <hr>
            <br>

            <h4>Búsqueda de discos por título (filtro por palabras)</h4>

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
            <hr>
            <br>
            <a href="/bands" class="btn btn-primary float-right">
                Volver a Grupos
            </a>
            <hr>
            <a href="/home" class="btn btn-primary float-right">
                Volver a HOME - INICIO
            </a>
            <br>
        </div>
    </div>
</body>

<footer>
    <div class="card-body">
        <img src="https://www.recordstoreday.es/images/logos/logo-RSDS-HalfVinyl-small.jpg">
    </div>

</footer>

</html>
@endsection