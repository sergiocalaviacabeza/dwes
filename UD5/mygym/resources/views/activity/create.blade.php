@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1>Creación de Actividades</h1>

        <form action="/activities" method="post">
        @csrf
        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name"> 
        </div>

        <div>
            <label for="description">Descripción</label>
            <input type="text" name="description"> 
        </div>

        <div>
            <label for="duration">Duración (minutos)</label>
            <input type="text" name="duration"> 
        </div>

        <div>
            <label for="maximum">Número máximo de participantes</label>
            <input type="text" name="maximum"> 
        </div>

        <div>
            <input type="submit" value="crear"> 
        </div>        
        </form>
        </div>
    </div>

</div>
@endsection
