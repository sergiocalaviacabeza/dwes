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
        <li>
            <strong>Rol</strong>
            {{ $user->rol }}
        </li>
        <hr>
        <h3>Pedidos</h3>
        
    </ul>
    <a href="/users" class="btn btn-primary float-right">
                Volver
    </a>  
    </div>
</div>
@endsection