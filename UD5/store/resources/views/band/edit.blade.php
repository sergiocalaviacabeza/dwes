@extends('layouts.app')

@section('content')

<style type="text/css">
    body {
        background-image: url("https://www.poblenouurbandistrict.com/wp-content/uploads/2019/04/record-store-day-.jpg");
        font-family: 'Averta', sans-serif;
    }
</style>

<div class="container">
    <div class="card-body">

        <h4>Editar / Actualizar Grupo</h4>

        <form action="/bands/{{$band->id}}" method="post">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div>
                <label for="name">Nombre</label>
                <input type="text" name="name" value="{{$band->name}}">
            </div>
            <br>
            <div>
                <label for="style">Estilo</label>
                <input type="text" name="style" value="{{$band->style}}">
            </div>
            <br>
            <div>
                <label for="country">País</label>
                <input type="text" name="country" value="{{$band->country}}">
            </div>
            <br>
            <div>
                <input type="submit" class="btn btn-success float-right" value="ACTUALIZAR">
            </div>
            <br>
        </form>
        <br>
        <a href="/bands" class="btn btn-primary float-right">
            Volver a Grupos
        </a>
    </div>
</div>
@endsection