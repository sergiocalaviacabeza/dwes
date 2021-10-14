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
        $aciertos=0;

        if ($POST['resp1']=='php'){
            $aciertos = $aciertos + 1;
        }else if ($POST['resp1']=='visual'){
            $aciertos = $aciertos + 1;
        }
        
        echo " Resultado = $aciertos respuestas correctas";
        
  ?>
</body>

</html>