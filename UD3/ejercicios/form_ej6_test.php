<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6 Test</title>
</head>

<body>
    <h2>Test DAW 2</h2>
    <form method="post" action="">
    1- Lenguaje de Servidor: <br>
        <input type="radio" name="resp1" value="c" > C <br>
        <input type="radio" name="resp1" value="python" checked> Python<br>
        <input type="radio" name="resp1" value="php" checked> PHP <br>
        <br>

        2- Programa de editar código: <br>
        <input type="radio" name="resp2" value="visual">Visual Studio <br>
        <input type="radio" name="resp2" value="office">Libre Office<br>
        <input type="radio" name="resp2" value="paint">Paint<br>
        <br>
        <input type="submit" value="Enviar">
        <br>
    </form>

        <br>
    
    <?php

    if (isset($_POST['resp1']) && !empty($_POST['resp1'])){
        echo "Error<br><br>";
    } else if (isset($_POST['resp2']) && !empty($_POST['resp2'])){
      echo "Error en el número 2 por el tipo de formato, no es numérico o está vacío<br>";
    }

      $resp1 = $_POST['resp1'];
      $resp2 = $_POST['resp2'];

        $aciertos=0;
        if ($resp1 == 'php'){
            $aciertos= $aciertos + 1;
        }if ($resp2 == 'visual'){
            $aciertos= $aciertos + 1;
        }else {
        echo "No tienes ningún acierto<br><br>";
    }
    
      echo " Resultado = $aciertos respuestas correctas";
    
  ?>
</body>

</html>