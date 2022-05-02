<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupos</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1>Grupos</h1>

        <form action="/bands" method="post">
        @csrf
        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name"> 
        </div>

        <div>
            <label for="style">Estilo</label>
            <input type="text" name="style"> 
        </div>

        <div>
            <label for="country">País</label>
            <input type="text" name="country"> 
        </div>

        <div>
            <input type="submit" value="crear"> 
        </div>        
        </form>
        </div>
    </div>
    <a href="/bands" class="btn btn-primary float-right">
                Volver
    </a>  
</div>
</body>
</html>