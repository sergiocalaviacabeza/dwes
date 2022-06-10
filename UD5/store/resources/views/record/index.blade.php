@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">


        <h2>CATÁLOGO RECORDSTORE - Lista de Discos a la venta
        </h2>

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
                <td> <a href="/records/{{$record->id}}">Ver</a></td>
                <td> <a href="/records/{{$record->id}}/edit">Editar</a></td>
                <td> <a href="/baskets/{{$record->id}}/add" class="btn btn-success float-right">AÑADIR A CESTA</a></td>
                <td> <a href="/baskets/{{$record->id}}/remove">QUITAR CESTA</a></td>
                <td> <a href="/baskets/{{$record->id}}/show">CESTA</a></td>
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
            Volver al inicio Grupos
        </a>
        <hr>
        <br>
        <a href="/home" class="btn btn-primary float-right">
            Volver a HOME - INICIO
        </a>
    </div>
</div>
@endsection