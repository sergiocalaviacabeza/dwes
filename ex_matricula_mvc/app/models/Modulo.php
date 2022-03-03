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
        $db = Modulo::db();
        $stmt = $db->prepare('SELECT * FROM modulos WHERE id=:id');
        $stmt->execute(array(':id' => $id));
        $stmt->setFetchMode(PDO::FETCH_CLASS, Modulo::class);
        $modulo = $stmt->fetch(PDO::FETCH_CLASS);
        return $modulo;
        
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
        $db = Modulo::db();
        $stmt = $db->prepare('UPDATE modulos SET codigo = :codigo, nombre = :nombre, horas = :horas, plazas = :plazas, grupo = :grupo WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':codigo', $this->codigo);
        $stmt->bindValue(':nombre', $this->nombre);
        $stmt->bindValue(':horas', $this->horas);
        $stmt->bindValue(':plazas', $this->plazas);
        $stmt->bindValue(':grupo', $this->grupo);
        return $stmt->execute();
    }
}