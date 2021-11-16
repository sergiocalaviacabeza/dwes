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
class User extends Model
{
    public static function all(){ 
         //obtener conexión
         $db = User::db();
         //preparar consulta
         $sql = "SELECT * FROM users";
         //ejecutar
         $statement = $db->query($sql); // query para ejecutar la consulta
         //el resultado puede ser tomado usan las funciones de de PDO
         //fetch recoge registro a registro. Si hay muchos requiere un bucle
         //fetch_all recoge arrays
         $users = $statement->fetchAll(PDO::FETCH_CLASS, User::class);
         //retornar
         return $users;       
    }
    public static function find($id){ 
        //TODO        
    }
    public function insert(){ 
        //TODO        
    }
    public function delete(){ 
        //TODO        
    }
    public function save(){ 
        //TODO        
    }
}
