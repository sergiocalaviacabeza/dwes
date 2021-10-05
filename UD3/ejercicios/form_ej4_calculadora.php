<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 calculadora</title>
</head>

<body>
    <h2>Calculadora</h2>
    <form action="" method="post">
        <label>Número 1</label>
        <input type="text" value="" name="numero1"><br>
        <label>Número 2</label>
        <input type="text" value="" name="numero2"><br><br>
        <label for="operador">Selecciona el operador:</label>

        <select name="operador" id="operador">
          <option value="+">Suma</option>
          <option value="-">Resta</option>
          <option value="*">Multiplicacion</option>
          <option value="/">Division</option>
        </select> 
        <br><br>
        <input type="submit" value="Enviar"><br><br>
    </form>
    <?php

    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $operador = $_POST['operador'];

    switch (  $_POST['operador']) {
      case '+':
        $resultado=$numero1+$numero2;
        break;
      
      case '-':
        $resultado=$numero1-$numero2;
        break;  
      
      case '*':
        $resultado=$numero1*$numero2;
        break;
      
      case '/':
        $resultado=$numero1/$numero2;
          break;  
      
      default:
      
      break;
    }
    echo " Resultado $numero1 $operador $numero2 = $resultado";
    ?>
</body>

</html>