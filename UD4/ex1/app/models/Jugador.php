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
        $statement = $db->prepare('SELECT * FROM jugadores WHERE id=:id');
        $statement->execute(array(':id' => $id));
        $statement->setFetchMode(PDO::FETCH_CLASS, Jugador::class);
        $jugador = $statement->fetch(PDO::FETCH_CLASS);
    
        return $jugador;
    }   

    public static function all()
    {
        $db = Jugador::db();
        $sql = "SELECT * FROM jugadores";
        $statement = $db->query($sql);
        $jugador = $statement->fetchAll(PDO::FETCH_CLASS, Jugador::class);
        return $jugador;
    }

    public function insert()
    {
        $consulta=Jugador::db();
        $cnslt = $consulta->prepare('INSERT INTO jugadores(nombre, puesto, nacimiento) VALUES(:nombre, :puesto, :nacimiento)');
        $cnslt->bindValue(':nombre', $this->nombre);
        $cnslt->bindValue(':puesto', $this->puesto);
        $cnslt->bindValue(':nacimiento', $this->nacimiento);
        return $cnslt->execute();
    }

    public function save()
    {
        $db = Jugador::db();
        $cnslt = $db->prepare('UPDATE jugadores SET nombre = :nombre, puesto = :puesto, nacimiento = :nacimiento WHERE id = :id');
        $cnslt->bindValue(':id', $this->id);
        $cnslt->bindValue(':nombre', $this->nombre);
        $cnslt->bindValue(':puesto', $this->puesto);
        $cnslt->bindValue(':nacimiento', $this->nacimiento);
        return $cnslt->execute();
    }
}