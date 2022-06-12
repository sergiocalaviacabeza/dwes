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

        <h4>Insertar Disco</h4>

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
                <input type="submit" class="btn btn-success float-right" value="INSERTAR">
            </div>
            <br>
            <br>
            <br>
            <br>
        </form>
    </div>
</div>
<br>
<a href="/records" class="btn btn-primary float-right">Volver a Catálogo Discos</a>
<br><br>
<a href="/bands" class="btn btn-primary float-right">
    Volver a Grupos</a>
</div>
@endsection