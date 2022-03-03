<?php
namespace App\Models;

use PDO;
use DateTime;
use Core\Model;

class Modulo extends Model
{
    public function __construct()
    {
        
    }

    public static function find($id) 
    {
        
    } 
    
    
    public static function findByGroup($grupo) 
    {
        
    }  

    public static function all()
    {
       //obtener conexión
       $db = Modulo::db();
       //preparar consulta
       $sql = "SELECT * FROM modulos";
       //ejecutar
       $statement = $db->query($sql);
       //recoger datos con fetch_all
       $modulos = $statement->fetchAll(PDO::FETCH_CLASS, Modulo::class);
       //retornar
       return $modulos;
    }

    public function insert()
    {
      
    }

    public function save()
    {
        
    }
}