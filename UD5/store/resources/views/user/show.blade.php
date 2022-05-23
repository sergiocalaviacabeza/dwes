@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

    <h1>Usuario - Cliente nº {{$user->id}}</h1>


    <ul>
        <li>
            <strong>Nombre</strong>
            {{ $user->name }}
        </li>
        <li>
            <strong>Dirección</strong>
            {{ $user->address }}
        </li>
        <li>
            <strong>E-mail</strong>
            {{ $user->email }}
        </li>
        <hr>
        <h3>Pedidos</h3>

        <!--@foreach($band->records as $record)
            <li>{{$record->title}}</li>
        @endforeach
        -->
        
    </ul>
    <a href="/users" class="btn btn-primary float-right">
                Volver
    </a>  
    </div>
</div>
@endsection