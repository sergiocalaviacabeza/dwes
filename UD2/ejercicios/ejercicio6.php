<?php

    $num1 = 0;
    $num2 = 1;

    $counter = 0;
    echo "Sucesión de Fibonacci<br>";

    while ($counter <= 10){
        $counter = $counter + 1;
        echo "$num1 <br>";
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 =  $num3;
};
