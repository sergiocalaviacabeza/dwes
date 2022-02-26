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
        //Completar
    }    
    public static function all()
    {
        //Completar
    }

    public function insert()
    {
        //Completar
    }

    public function save()
    {
        //Completar
    }
}