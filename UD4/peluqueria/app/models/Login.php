<?php
namespace App\Models;

use PDO;
use DateTime;
use Core\Model;

require_once 'core/Model.php';


class Login extends Model{

    public static function all(){
        $db = Login::db();
        $sql = "SELECT * FROM sesion";
        $statement = $db->query($sql);
        $logs = $statement->fetchAll(PDO::FETCH_CLASS, Login::class);
        return $logs;
    }

    public function find(){
        
    }

    public function insert(){
        $consulta=Login::db();
        $cnslt = $consulta->prepare('INSERT INTO sesion(users, passwords) VALUES(:users, :passwords');
        $cnslt->bindValue(':users', $this->nombre);
        $cnslt->bindValue(':passwords', $this->apellidos);
        return $cnslt->execute();
    }
}