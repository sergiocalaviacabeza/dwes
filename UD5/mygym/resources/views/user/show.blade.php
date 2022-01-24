<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Socios mygym</h1>

    <ul>
        <li>
            <strong>DNI</strong>
            {{ $user->dni }}
        </li>
        <li>
            <strong>Nombre completo</strong>
            {{ $user->name }}
        </li>
        <li>
            <strong>Peso</strong>
            {{ $user->weight }}
        </li>
        <li>
            <strong>Altura</strong>
            {{ $user->height }}
        </li>
        <li>
            <strong>Fecha de Nacimiento</strong>
            {{ $user->date }}
        </li>
        <li>
            <strong>Sexo</strong>
            {{ $user->sex }}
        </li>
    </ul>
    <br>
    <a href="/users" class="btn btn-primary float-right">
                Volver
    </a>    
</body>
</html>