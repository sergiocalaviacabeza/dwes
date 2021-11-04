<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cookies ej 10</title>
</head>
<body>
  <h1>Aplicar color al fondo de la página</h1>

  <form action="?method=cambio" method="post">
  Elige un color:  <br>
        <select name="color">
         <optgroup label="Grupo de colores">
           <option selected value="red">rojo</option>
           <option value="blue">azul</option>
           <option value="green">verde</option>
           <option value="yellow">amarillo</option>
           <option value="violet">violeta</option>
         </optgroup>
       </select>
       <br>
        <input type="submit" value="cambiar">
    </form>
</body>
</html>