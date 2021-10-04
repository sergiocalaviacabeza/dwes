<?php
echo '<meta charset="UTF-8">';
if(isset($_POST)){
    echo "Libro registrado con éxito <hr>";
    echo "Título: ".$_POST['titulo']."<br>";
    echo "Autor: ".$_POST['autor']."<br>";
    echo "Editorial: ".$_POST['editorial']."<br>";
    echo "Páginas: ".$_POST['paginas']."<br>";
    echo "<hr><pre>";

}
 
