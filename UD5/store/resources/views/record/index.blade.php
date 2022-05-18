@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">


        <h1>Lista de Discos
        </h1>

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
                <th>Precio</th>
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
            </tr>
            @empty
            <tr>
                <td colspan="3">No hay discos registrados</td>
            </tr>
            @endforelse
        </table>
        <hr>
        <br>
        <a href="/bands" class="btn btn-primary float-right">
            Volver
        </a>
    </div>
</div>
@endsection