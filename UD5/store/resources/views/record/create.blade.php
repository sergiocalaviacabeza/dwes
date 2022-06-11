@extends('layouts.app')

@section('content')

<style type="text/css">   
        body {
        font-family: 'Averta', sans-serif;
        }
</style>

<div class="container">
    <div class="row justify-content-center">

        <h1>Añadir Disco</h1>

        <form action="/records" method="post">
        <div>
        @csrf
        <label>Grupo: </label><select name="band_id">
            @foreach($bands as $band)
        <option value="{{ $band->id }}">{{ $band->name }}</option>
        @endforeach
        </select>
        @error('band_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <div>
            <label for="title">Título</label>
            <input type="text" name="title"> 
        </div>
        <br>
        <div>
            <label for="code">Código</label>
            <input type="text" name="code"> 
        </div>
        <br>
        <div>
            <label for="year">Año</label>
            <input type="text" name="year"> 
        </div>
        <br>
        <div>
            <label for="format">Formato</label>
            <input type="text" name="format"> 
        </div>
        <br>
        <div>
            <label for="condition">Estado</label>
            <input type="text" name="condition"> 
        </div>
        <br>
        <div>
            <label for="price">Precio</label>
            <input type="text" name="price"> 
        </div>
        <br>
        <div>
            <input type="submit" value="crear"> 
        </div>
        <hr>        
        </form>
        </div>
    </div>
    <br>
    <a href="/records" class="btn btn-primary float-right">Volver</a>  
</div>
@endsection