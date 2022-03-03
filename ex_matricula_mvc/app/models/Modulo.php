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
        $db = Modulo::db();
        $stmt = $db->prepare('INSERT INTO modulos(codigo, nombre, horas, plazas, grupo) VALUES(:codigo, :nombre, :horas, :plazas, :grupo)');
        $stmt->bindValue(':codigo', $this->codigo);
        $stmt->bindValue(':nombre', $this->nombre);
        $stmt->bindValue(':horas', $this->horas);
        $stmt->bindValue(':plazas', $this->plazas);
        $stmt->bindValue(':grupo', $this->grupo);
        return $stmt->execute();
      
    }

    public function save()
    {
        
    }
}