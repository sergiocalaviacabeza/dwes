@extends('layouts.app')

@section('content')

<style type="text/css">
    body {
        background-image: url("https://media.istockphoto.com/vectors/shopping-cart-and-vinyl-record-icon-vector-id1131802904");
        font-family: 'Averta', sans-serif;
    }
</style>


<div class="container">
    <div class="card-body">


        <h4><strong>Detalles Pedido - Carro Compra</strong>
        </h4>

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
                <td> <a href="/records/{{$record->id}}" class="btn btn-success float-right">Añadir Cesta</a></td>
                <td> <a href="/records/{{$record->id}}/edit" class="btn btn-success float-right">Eliminar de la Cesta</a></td>
                <td> <a href="/orders" class="btn btn-success float-right">CESTA</a></td>
            </tr>
            @empty
            <tr>
                <td colspan="3">No hay discos registrados</td>
            </tr>
            @endforelse
        </table>
        <hr>
        <br>
        <a href="/orders/create" class="btn btn-success float-right">
            CONFIRMAR PEDIDO
        </a>
        <br>
        <hr>
        <hr>
        <br>
        <a href="/records" class="btn btn-primary float-right">
            Volver a Catálogo Discos
        </a>
        <br>
        <hr>
        <br>
        <a href="/bands" class="btn btn-primary float-right">
            Volver a Grupos
        </a>
        <hr>
        <br>
        <a href="/home" class="btn btn-primary float-right">
            Volver a HOME - INICIO
        </a>
    </div>               
</div>
@endsection