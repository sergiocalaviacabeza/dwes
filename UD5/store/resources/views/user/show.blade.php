@extends('layouts.app')

@section('content')

<style type="text/css">   
        body {
        background-image:  url("https://www.poblenouurbandistrict.com/wp-content/uploads/2019/04/record-store-day-.jpg");        
        font-family: 'Averta', sans-serif;
        }
</style>

<div class="container">
    <div class="row justify-content-center">

    <h3><strong>Cliente nº {{$user->id}}</strong></h3>


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
            <strong>Ciudad</strong>
            {{ $user->city }}
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
        <h3><strong>Pedidos</strong></h3>
        
    </ul>
    <a href="/users" class="btn btn-primary float-right">
                Volver a Usuarios
    </a>  
    </div>
</div>
@endsection