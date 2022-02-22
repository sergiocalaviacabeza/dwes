<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1>Creación de Servicios</h1>

        <form action="/services" method="post">
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
            <label for="details">Detalles</label>
            <input type="text" name="details"> 
        </div>

        <div>
            <label for="price">Precio</label>
            <input type="text" name="price"> 
        </div>

        <div>
            <label for="time">Tiempo</label>
            <input type="text" name="time"> 
        </div>

        <div>
            <input type="submit" value="crear"> 
        </div>        
        </form>
        </div>
    </div>
    <a href="/services" class="btn btn-primary float-right">
                Volver
    </a>  
</div>
</body>
</html>