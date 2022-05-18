@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

    <h1>Editar Actualizar Grupo</h1>

    <form action="/bands/{{$band->id}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name" value="{{$band->name}}"> 
        </div>

        <div>
            <label for="style">Estilo</label>
            <input type="text" name="style" value="{{$band->style}}"> 
        </div>

        <div>
            <label for="country">País</label>
            <input type="text" name="country" value="{{$band->country}}"> 
        </div>

        <div>
            <input type="submit" value="Actualizar"> 
        </div>        
    </form>
    <br>
    <a href="/bands" class="btn btn-primary float-right">
                Volver
    </a>    
    </div>
</div>
@endsection