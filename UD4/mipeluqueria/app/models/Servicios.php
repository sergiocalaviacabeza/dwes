<?php

namespace App\Models;

use PDO;
use Core\Model;

require_once 'core/Model.php';

/*
* Modelo de usuario
* Hereda de models
* No es necesario definir los atributos, PHP permite definirlos durante la ejecución
*/
class Servicios extends Model
{
    public static function all(){ 
         //obtener conexión
         $db = Servicios::db();
         //preparar consulta
         $sql = "SELECT * FROM servicios";
         //ejecutar
         $statement = $db->query($sql); // query para ejecutar la consulta
         //el resultado puede ser tomado usan las funciones de de PDO
         //fetch recoge registro a registro. Si hay muchos requiere un bucle
         //fetch_all recoge arrays

         $servicios = $statement->fetchAll(PDO::FETCH_CLASS, Servicios::class);
        //  echo "<pre>";
        //  var_dump ($servicios); exit();
         //retornar
         return $servicios;       
    }
    public static function find($id){ 

        $db = Servicios::db();
        $statement = $db->prepare('SELECT * FROM servicios WHERE id=:id');
        $statement->execute(array(':id' => $id));
        //Para cargar un objeto User debemos usar setFetchMode y fetch
        $statement->setFetchMode(PDO::FETCH_CLASS, Servicios::class);
        $servicios = $statement->fetch(PDO::FETCH_CLASS);
    
        return $servicios;      
    }
    
    public function insert()
    {
        $db = Servicios::db();
        $stmt = $db->prepare('INSERT INTO servicios(id, servicio, descripcion, tiempo, precio) VALUES(:id, :servicio, :descripcion, :tiempo, :precio)');
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':servicio', $this->servicio);
        $stmt->bindValue(':descripcion', $this->descripcion);
        $stmt->bindValue(':tiempo', $this->tiempo);
        $stmt->bindValue(':precio', $this->precio);
        return $stmt->execute();
    }

    public function save()
    {
        $db = Servicios::db();
        $stmt = $db->prepare('UPDATE servicios SET id = :id, servicio = :servicio, descripcion = :descripcion, tiempo = :tiempo, precio = :precio WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':servicio', $this->servicio);
        $stmt->bindValue(':descripcion', $this->descripcion);
        $stmt->bindValue(':tiempo', $this->tiempo);
        $stmt->bindValue(':precio', $this->precio);
        return $stmt->execute();
    }
    
    public function delete(){ 
        $db = Servicios::db();
        $stmt = $db->prepare('DELETE FROM servicios WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        return $stmt->execute();
    }
}
