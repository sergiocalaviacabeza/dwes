<?php
namespace App\Models;

use PDO;
use DateTime;
use Core\Model;

require_once 'core/Model.php';


class Home extends Model{

    public static function all(){
        $db = Home::db();
        $sql = "SELECT * FROM estaciones";
        $statement = $db->query($sql);
        $logs = $statement->fetchAll(PDO::FETCH_CLASS, Home::class);
        return $logs;
    }

    public static function find($id){
        $db = Home::db();
        $statement = $db->prepare('SELECT * FROM estaciones WHERE id=:id');
        $statement->execute(array(':id' => $id));
        $statement->setFetchMode(PDO::FETCH_CLASS, Home::class);
        $servicios = $statement->fetch(PDO::FETCH_CLASS);
    
        return $servicios; 
    }

    public function save(){
        $consulta=Home::db();
        $stmt = $consulta->prepare('UPDATE estaciones SET titulo = :titulo, descripcion = :descripcion, urls =:urls WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':titulo', $this->titulo);
        $stmt->bindValue(':descripcion', $this->descripcion);
        $stmt->bindValue(':urls',$this->urls);
        return $stmt->execute();
    }

    public function save_consulta(){
        $consulta = Home::db();
        $stmt = $consulta->prepare('INSERT INTO consulta(nombre, apellidos, correo, asunto, mensaje) VALUES(:nombre, :apellidos, :correo, :asunto, :mensaje)');
        $stmt->bindValue(':nombre', $this->nombre);
        $stmt->bindValue(':apellidos', $this->apellidos);
        $stmt->bindValue(':correo', $this->correo);
        $stmt->bindValue(':asunto', $this->asunto);
        $stmt->bindValue(':mensaje', $this->mensaje);
        return $stmt->execute();
    }
}