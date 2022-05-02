<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discos</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1>Añadir Disco</h1>

        <form action="/records" method="post">
        @csrf
        <div>
            <label for="title">Título</label>
            <input type="text" name="title"> 
        </div>

        <div>
            <label for="code">Código</label>
            <input type="text" name="code"> 
        </div>

        <div>
            <label for="year">Año</label>
            <input type="text" name="year"> 
        </div>

        <div>
            <label for="format">Formato</label>
            <input type="text" name="format"> 
        </div>

        <div>
            <label for="condition">Estado</label>
            <input type="text" name="condition"> 
        </div>

        <div>
            <input type="submit" value="crear"> 
        </div>        
        </form>
        </div>
    </div>
    <a href="/records" class="btn btn-primary float-right">
                Volver
    </a>  
</div>
</body>
</html>