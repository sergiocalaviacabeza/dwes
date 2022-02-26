<?php
namespace App\Models;

use PDO;
use DateTime;
use Core\Model;

class Jugador extends Model
{
    public function __construct()
    {
        $this->nacimiento = \DateTime::createFromFormat('Y-m-d H:i:s', $this->nacimiento);
    }

    public static function find($id) 
    {
        $db = Jugador::db();
        $stmt = $db->prepare('SELECT * FROM jugadores WHERE id=:id');
        $stmt->execute(array(':id' => $id));
        $stmt->setFetchMode(PDO::FETCH_CLASS, Jugador::class);
        $jugador = $stmt->fetch(PDO::FETCH_CLASS);
        return $jugador;
    }    
    public static function all()
    {
        //obtener conexión
        $db = Jugador::db();
        //preparar consulta
        $sql = "SELECT * FROM jugadores";
        //ejecutar
        $statement = $db->query($sql);
        //recoger datos con fetch_all
        $jugadores = $statement->fetchAll(PDO::FETCH_CLASS, Jugador::class);
        //retornar
        return $jugadores;
    }

    public function insert()
    {
        $db = Jugador::db();
        $stmt = $db->prepare('INSERT INTO jugadores(nombre, puesto, nacimiento) VALUES(:nombre, :puesto, :nacimiento)');
        $stmt->bindValue(':nombre', $this->nombre);
        $stmt->bindValue(':nacimiento', $this->nacimiento);
        $stmt->bindValue(':puesto', $this->puesto);
        return $stmt->execute();
    }

    public function save()
    {
        $db = Jugador::db();
        $stmt = $db->prepare('UPDATE jugadores SET nombre = :nombre, nacimiento = :nacimiento, puesto = :puesto WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':nombre', $this->nombre);
        $stmt->bindValue(':nacimiento', $this->nacimiento);
        $stmt->bindValue(':puesto', $this->puesto);
        return $stmt->execute();
    }
}