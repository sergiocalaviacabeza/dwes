@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

    <h1>Detalles Disco nº {{$record->id}}</h1>


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
                Volver
    </a>  
    </div>
</div>
@endsection