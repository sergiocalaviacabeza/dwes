<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudios</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1>Creación de estudios</h1>

        <form action="/studies" method="post">
        @csrf
        <div>
            <label for="code">Código</label>
            <input type="text" name="code"> 
        </div>

        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name"> 
        </div>

        <div>
            <label for="description">Descripción</label>
            <input type="text" name="description"> 
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