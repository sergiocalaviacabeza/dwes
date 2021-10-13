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
        $acierto=0;
        if(isset($_POST) && !empty($_POST)){
            if(resp1==php){
                $acierto++;
            }
        }
        else {
            echo "No hemos recibido nada!";
        }
        
        echo " Resultado = $aciertos respuestas correctas";
        
  ?>
</body>

</html>