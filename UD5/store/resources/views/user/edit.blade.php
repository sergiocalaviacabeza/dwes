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

        <h3><strong>Actualizar Usuario</strong></h3>

        <form action="/users/{{$user->id}}" method="post">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div>
                <label for="name">Nombre</label>
                <input type="text" name="name" value="{{$user->name}}">
            </div>
            <br>
            <div>
                <label for="address">Dirección</label>
                <input type="text" name="address" value="{{$user->address}}">
            </div>
            <br>
            <div>
                <label for="city">Ciudad</label>
                <input type="text" name="city" value="{{$user->city}}">
            </div>
            <br>
            <div>
                <label for="email">E-mail</label>
                <input type="text" name="email" value="{{$user->email}}">
            </div>
            <br>
            <div>
                <label for="rol">Rol</label>
                <input type="text" name="rol" value="{{$user->rol}}">
            </div>
            <br>
            <div>
                <input type="submit" class="btn btn-success float-right" value="ACTUALIZAR">
            </div>
            <br>
        </form>
        <br>
        <a href="/users" class="btn btn-primary float-right">
            Volver a Usuarios
        </a>
    </div>
</div>
@endsection