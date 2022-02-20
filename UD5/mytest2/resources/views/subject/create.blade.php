<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignaturas</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1>Añadir Asignaturas</h1>

        <form action="/subjects" method="post">
        @csrf
        <div>
            <label for="id_subject">Código</label>
            <input type="text" name="id_subject"> 
        </div>

        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name"> 
        </div>

        <div>
            <label for="abreviation">Abreviatura</label>
            <input type="text" name="abreviation"> 
        </div>

        <div>
            <input type="submit" value="crear"> 
        </div>        
        </form>
        </div>
    </div>
    <a href="/studies" class="btn btn-primary float-right">
                Volver
    </a>  
</div>
</body>
</html>