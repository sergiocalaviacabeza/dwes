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

        <h4>Editar / Actualizar Disco: {{$record->title}}</h4>

        <form action="/records/{{$record->id}}" method="post">
            <br>
            <input type="hidden" name="_method" value="PUT">
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
                <input type="text" name="title" value="{{$record->title}}">
            </div>
            <br>
            <div>
                <label for="code">Código</label>
                <input type="text" name="code" value="{{$record->code}}">
            </div>
            <br>
            <div>
                <label for="year">Año</label>
                <input type="text" name="year" value="{{$record->year}}">
            </div>
            <br>
            <div>
                <label for="format">Formato</label>
                <input type="text" name="format" value="{{$record->format}}">
            </div>
            <br>
            <div>
                <label for="condition">Estado</label>
                <input type="text" name="condition" value="{{$record->condition}}">
            </div>
            <br>
            <div>
                <label for="price">Precio</label>
                <input type="text" name="price" value="{{$record->price}}">
            </div>
            <br>
            <br>
            <div>
                <input type="submit" class="btn btn-success float-right" value="ACTUALIZAR">
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
        </form>

        <a href="/records" class="btn btn-primary float-right">
            Volver a Catálogo de Discos
        </a>
    </div>
</div>
@endsection