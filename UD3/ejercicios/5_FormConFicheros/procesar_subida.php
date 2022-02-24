<?php

// $_FILES contiene información sobre el fichero que se está subiendo
// Es un array bidimensional :
//     primer índice: identifica el fichero según el atributo name en el formulario  
//     claves para el segundo índice: 
//          name: nombre del fichero en el cliente
//          size: tamaño en bytes
//          type: tipo MIME del fichero
//          tmp_name: nombre temporal con el que se ha subido al servidor
//          error: código de error asociado a la subida
// El fichero se almacena en el directorio temporal del servidor
//  -> para moverlo a otro directorio: bool move_uploaded_file ($fichero, $destino)


echo "Nombre del fichero".$_FILES["fichero1"]["name"];
echo "<br>Nombre temporal del fichero en el servidor".$_FILES["fichero1"]["tmp_name"];

// hay que crear el directorio
$res1 = move_uploaded_file ($_FILES["fichero1"]["tmp_name"], 
                                "subidos/".$_FILES["fichero1"]["name"]);


echo "Nombre del fichero".$_FILES["fichero2"]["name"];
echo "<br>Nombre temporal del fichero en el servidor".$_FILES["fichero2"]["tmp_name"];

// hay que crear el directorio
$res2 = move_uploaded_file ($_FILES["fichero2"]["tmp_name"], 
                                "subidos/".$_FILES["fichero2"]["name"]);

if ($res1 && $res2) {
    echo "<br>Fichero guardado";
} else {
    echo "<br>Error";
}

