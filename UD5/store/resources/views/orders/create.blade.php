<!DOCTYPE html>
<html lang="es">
@extends('layouts.app')
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <title>Documento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/js/booking.js"></script>
</head>

<body>
    <h1>Seleccionar Discos</h1>
    <form action="">
        @csrf
        <label>Discos: </label><select id="record_id" name="record_id">
            @foreach($records as $record)
            <option value="{{ $record->id }}">{{ $record->title }}</option>
            @endforeach
        </select>
        <input type="submit" value="Buscar" id="formulario">
    </form>

    <div id="destino">
        <input type="hidden" id="user_id" value="{{ Auth::user()->id }}">
        <form action="" >
            <input type="submit" value="Comprar" id="comprar">
        </form>
        
    </div>
    <script src="/js/jquery-3.6.0.min.js"></script>
</body>

</html>