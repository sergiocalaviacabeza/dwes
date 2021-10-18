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
        <label for="resp1">1- Lenguaje de Servidor</label>
        <select name="resp1[]" id="resp1" multiple>
            <option value="c">C</option>
            <option value="phyton">Phyton</option>
            <option value="php">PHP</option>
        </select>
        <br><br>
        <input type="submit" value="Enviar">

        <label for="resp2">2- Programa Editor Código</label>
        <select name="resp2[]" id="resp2" multiple>
            <option value="visual">Visual Studio</option>
            <option value="office">Libre Office</option>
            <option value="paint">Paint</option>
        </select>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
    
    <?php
    if (isset($_POST['resp1']) && !empty($_POST)['resp1'])){
        echo "Error";
    } else if (isset($_POST['resp2']) && !empty($_POST['resp2'])){
      echo "Error en el número 2 por el tipo de formato, no es numérico o está vacío";
    }

      $resp1 = $_POST['resp1'];
      $resp2 = $_POST['resp2'];

        $aciertos=0;
        if (resp1 == php){
            $aciertos= $aciertos + 1;
        }else if (resp2 == visual){
            $aciertos= $aciertos + 1;
        }
    }
    else {
        echo "No tienes ningún acierto";
    }
    
      echo " Resultado = $aciertos respuestas correctas";
    
  ?>
</body>

</html>