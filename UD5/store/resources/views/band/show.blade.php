@extends('layouts.app')

@section('content')

<style type="text/css">   
        body {
        background-image:  url("https://www.poblenouurbandistrict.com/wp-content/uploads/2019/04/record-store-day-.jpg");
        font-family: 'Averta', sans-serif;
        }
</style>


<div class="container">
    <div class="card-body">

    <h4>Grupo código {{$band->id}} - BD RecordStore </h4>


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
        <h4>Discos a la venta de {{ $band->name }}</h4>

        @foreach($band->records as $record)
            <li>{{$record->title}}</li>
        @endforeach
        
    </ul>
    <a href="/bands" class="btn btn-primary float-right">
                Volver a Grupos
    </a>  
    </div>
</div>
@endsection