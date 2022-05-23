@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

    <h1>Editar Actualizar Usuario</h1>

    <form action="/users/{{$user->id}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name" value="{{$user->name}}"> 
        </div>

        <div>
            <label for="address">Dirección</label>
            <input type="text" name="address" value="{{$user->address}}"> 
        </div>

        <div>
            <label for="email">E-mail</label>
            <input type="text" name="email" value="{{$user->email}}"> 
        </div>

        <div>
            <input type="submit" value="Actualizar"> 
        </div>        
    </form>
    <br>
    <a href="/users" class="btn btn-primary float-right">
                Volver
    </a>    
    </div>
</div>
@endsection