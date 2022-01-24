<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Documento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>Creación de Usuarios</h1>

    <form action="/users" method="post">
        @csrf
        <div>
            <label for="dni">DNI</label>
            <input type="text" name="dni"> 
        </div>
        <div>
            <label for="name">Nombre completo</label>
            <input type="text" name="name"> 
        </div>

        <div>
            <label for="weight">Peso</label>
            <input type="text" name="weight"> 
        </div>

        <div>
            <label for="height">Altura</label>
            <input type="text" name="height"> 
        </div>

        <div>
            <label for="date">Fecha de Nacimiento</label>
            <input type="text" name="date"> 
        </div>
        
        <div>
            <label for="sex">Sexo</label>
            <input type="text" name="sex"> 
        </div>

        <div>
            <input type="submit" value="Crear"> 
        </div>    
    </form><br>
    <a href="/users" class="btn btn-primary float-right">
                Volver
    </a>    
</body>

</html>
