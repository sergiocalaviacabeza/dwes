@extends('layouts.app')

@section('content')

<style type="text/css">   
        body {
        font-family: 'Averta', sans-serif;
        }
</style>


<div class="container">
    <div class="row justify-content-center">

    <h3>Grupo código {{$band->id}} - BD RecordStore </h3>


    <ul>
        <li>
            <strong>Nombre</strong>
            {{ $band->name }}
        </li>
        <li>
            <strong>Estilo</strong>
            {{ $band->style }}
        </li>
        <li>
            <strong>País</strong>
            {{ $band->country }}
        </li>
        <hr>
        <h3>Discos a la venta de {{ $band->name }}</h3>

        @foreach($band->records as $record)
            <li>{{$record->title}}</li>
        @endforeach
        
    </ul>
    <a href="/bands" class="btn btn-primary float-right">
                Volver
    </a>  
    </div>
</div>
@endsection