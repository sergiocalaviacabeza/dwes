<?php
echo '<meta charset="UTF-8">';
if(isset($_POST['nombre'])&& !empty($_POST['nombre'])){
    echo "Bienvenido <hr>";
    echo "Usuario: ".$_POST['nombre']."<br>";
    echo "<hr><pre>";

}else {
    echo "Error, campo obligatorio, vuelve atrás";
}

 