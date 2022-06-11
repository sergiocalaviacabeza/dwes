@extends('layouts.app')

@section('content')

<style type="text/css">   
        body {
        font-family: 'Averta', sans-serif;
        }
</style>

<div class="container">
    <div class="row justify-content-center">

    <p>El usuario logueado {{$user->name}}</p>

        <h1>Lista de Usuarios
        </h1>

        <a href="/users/create" class="btn btn-primary float-right">
            Añadir Nuevo Usuario
        </a>
        <br>
        <hr>

        <table border="1">
            <tr>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Ciudad</th>
                <th>E-mail</th>
                <th>Rol</th>
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

            @endforelse
        </table>
        <br>
        <hr>
        <a href="/home" class="btn btn-primary float-right">
            Volver a HOME - INICIO
        </a>

    </div>
</div>
@endsection