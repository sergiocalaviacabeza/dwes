@extends('layouts.app')

@section('content')

<style type="text/css">
    body {
        background-image: url("https://www.poblenouurbandistrict.com/wp-content/uploads/2019/04/record-store-day-.jpg");
        font-family: 'Averta', sans-serif;
    }
</style>

<div class="container">
    <div class="row justify-content-center">

        <h4>Añadido al carrito RecordStore Disco código nº{{$record->id}}</h4>

        <hr>
        <ul>
            <li>
                <strong>Grupo</strong>
                {{ $record->band->name }}
            </li>
            <li>
                <strong>Título</strong>
                {{ $record->title }}
            </li>
            <li>
                <strong>Código</strong>
                {{ $record->code }}
            </li>
            <li>
                <strong>Año</strong>
                {{ $record->year }}
            </li>
            <li>
                <strong>Formato</strong>
                {{ $record->format }}
            </li>
            <li>
                <strong>Estado</strong>
                {{ $record->condition }}
            </li>
            <li>
                <strong>Precio</strong>
                {{ $record->price }}
            </li>
        </ul>
        <a href="/records" class="btn btn-primary float-right">
            Volver al Catálogo de Discos</a>
        <br>
        <br>
        <hr>
        <a href="/bands" class="btn btn-primary float-right">
            Volver a Grupos</a>
    </div>
</div>
@endsection