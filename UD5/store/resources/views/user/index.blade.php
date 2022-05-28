@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

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
                <td>{{$user->role}} </td>
                <td> <a href="/users/{{$user->id}}">Ver</a></td>
                <td> <a href="/users/{{$user->id}}/edit">Editar</a></td>
            </tr>
            <tr>



            </tr>
            @empty

            @endforelse
        </table>

    </div>
</div>
@endsection