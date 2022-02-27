<?php
namespace App\Models;

use PDO;
use DateTime;
use Core\Model;

require_once 'core/Model.php';


class Trabajador extends Model{

    public static function all(){
        $db = Trabajador::db();
        $sql = "SELECT * FROM trabajador";
        $statement = $db->query($sql);
        $trab = $statement->fetchAll(PDO::FETCH_CLASS, Trabajador::class);
        return $trab;
    }

    public static function find($id){
        $db = Trabajador::db();
        $statement = $db->prepare('SELECT * FROM trabajador WHERE id=:id');
        $statement->execute(array(':id' => $id));
        $statement->setFetchMode(PDO::FETCH_CLASS, Trabajador::class);
        $trab = $statement->fetch(PDO::FETCH_CLASS);
    
        return $trab;     
    }

    public function insert(){
        $consulta=Trabajador::db();
        $cnslt = $consulta->prepare('INSERT INTO trabajador(nombre, apellidos, correo, telefono, categoria) VALUES(:nombre, :apellidos, :correo, :telefono, :categoria)');
        $cnslt->bindValue(':nombre', $this->nombre);
        $cnslt->bindValue(':apellidos', $this->apellidos);
        $cnslt->bindValue(':correo', $this->correo);
        $cnslt->bindValue(':telefono', $this->telefono);
        $cnslt->bindValue(':categoria', $this->categoria);
        return $cnslt->execute();
    }

    public function save(){
        $db = Trabajador::db();
        $stmt = $db->prepare('UPDATE trabajador SET nombre = :nombre, apellidos = :apellidos, correo = :correo, telefono = :telefono, categoria = :categoria WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':nombre', $this->nombre);
        $stmt->bindValue(':apellidos', $this->apellidos);
        $stmt->bindValue(':correo', $this->correo);
        $stmt->bindValue(':telefono', $this->telefono);
        $stmt->bindValue(':categoria', $this->categoria);
        return $stmt->execute();  
    }

    public function delete(){
        $db = Trabajador::db();
        $stmt = $db->prepare('DELETE FROM trabajador WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        return $stmt->execute();
    }

    public function save_servicio(){
        $db = Trabajador::db();
        $cnslt = $db->prepare('INSERT INTO employee_service(employee_id, service_id) VALUES(:employee_id, :service_id)');
        $cnslt->bindValue(':employee_id', $this->employee_id);
        $cnslt->bindValue(':service_id', $this->service_id);
        return $cnslt->execute(); 
    }

    public static function find_serv(){
        $db = Trabajador::db();
        $sql = "SELECT * FROM employee_service";
        $statement = $db->query($sql);
        $trab = $statement->fetchAll(PDO::FETCH_CLASS, Trabajador::class);
        return $trab;     
    }

    public function delete_serv($id){
        $db = Trabajador::db();
        $stmt = $db->prepare('DELETE FROM employee_service WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        return $stmt->execute(); 
    }
}