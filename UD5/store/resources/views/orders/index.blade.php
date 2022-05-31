<!DOCTYPE html>
<html lang="en">
@extends('layouts.app')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Pedidos</h1>
    <a href="/orders/create" class="btn btn-primary float-left">Comprar Discos</a>
    <br>
    <br>

    <table border="1">
        <tr>
            <th>Título</th>
            <th>Precio</th>
            <th>Usuario</th>
        </tr>
        @forelse ($orders as $order)
        <tr>
            <td>{{$order->title}} </td>
            <td>{{$order->price}} </td>
            <td>{{$order->user_id}} </td>
        </tr>
        @empty
        <tr>
            <td colspan="3">No hay pedidos</td>
        </tr>
        @endforelse
    </table>
</body>

</html>