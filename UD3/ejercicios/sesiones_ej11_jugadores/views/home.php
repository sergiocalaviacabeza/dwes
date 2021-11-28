<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jugadores</title>
</head>
<body>
  <h1>Jugadores</h1>
  <h4><a href="?method=empty">Vaciar lista de jugadores</a></h4>
  <ul>

    <?php 
      if (count($jugadores)){
        foreach ($jugadores as $key => $jugador) {
            echo "<li> Jugador nº" .($key+1). ": $jugador" . '<a href="?method=delete&key='.$key.'"> Borrar</a></li>'; 
        }
      }else{
        echo "no hay ninguno";
      }
    ?>    


  </ul>

  <hr>
  <form action="?method=new" method="post">
     <label for="new">Nuevo jugador:</label><input type="text" name ="new"> 

    <input type="submit" value="Añadir"> 

  </form>    

</body>
</html>