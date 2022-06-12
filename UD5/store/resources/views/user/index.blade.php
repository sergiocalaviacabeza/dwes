<!DOCTYPE html>
<html lang="en">
@extends('layouts.app')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RecordStore</title>
</head>

@section('content')

<style type="text/css">
    body {
        font-family: 'Averta', sans-serif;
    }

    footer {
        background-color: #2b2b2b;
        color: white;
        text-align: center;
    }
</style>

<body>
<div class="container">
    <div class="row justify-content-center">

    <p>El usuario logueado es {{$user->name}}</p>

        <h1>Lista de Usuarios
        </h1>

        <a href="/users/create" class="btn btn-primary float-right">
            Añadir Nuevo Usuario
        </a>
        <br>
        <hr>

        <table class="table table-striped">
            <tr>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Ciudad</th>
                <th>E-mail</th>
                <th>Rol</th>
                <th></th>
                <th></th>
            </tr>
            @forelse ($users as $user)
            <tr>
                <td>{{$user->name}} </td>
                <td>{{$user->address}} </td>
                <td>{{$user->city}} </td>
                <td>{{$user->email}} </td>
                <td>{{$user->rol}} </td>
                <td> <a href="/users/{{$user->id}}" class="btn btn-success float-right">Ver</a></td>
                <td> <a href="/users/{{$user->id}}/edit" class="btn btn-success float-right">Editar</a></td>
            </tr>
            <tr>

            </tr>
            @empty
            <tr>
                <td colspan="3">No hay usuarios registrados</td>
            </tr>

            @endforelse
        </table>
        <br>
        <hr>
        <a href="/home" class="btn btn-primary float-right">
            Volver a HOME - INICIO
        </a>
       
    </div>
</div>
<br>
</body>

<footer>
    <div class="card-body">
        <h5><strong>RECORDSTORE</strong></h5>
        <h6>C/ Independencia - Zaragoza</h6>
    <h6>976757070 - info@recordstore.com</h6>
        <img src="https://www.recordstoreday.es/images/logos/logo-RSDS-HalfVinyl-small.jpg">
        
    </div>

</footer>

</html>

@endsection