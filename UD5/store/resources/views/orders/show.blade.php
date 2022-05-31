<!DOCTYPE html>
<html lang="en">
@extends('layouts.app')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Discos</h1>
    
    @foreach($records as $record)
    <ul>
        <li>Título: {{$record->title}}</li>
        <li>Precio: {{$record->price}}</li>
    </ul>    
    @endforeach
    
</body>
</html>