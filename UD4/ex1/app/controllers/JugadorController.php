<?php
namespace App\Controllers;

use fotos;
use App\Models\Jugador;
/**
*
*/
class JugadorController
{
    function __construct()
    {
        // echo "En JugadorController";
    }

    public function index()
    {
        $jugadores=Jugador::all();
        require "app/views/jugador/index.php";        
    }

    public function create()
    {
        require "app/views/jugador/create.php";   
    }

    public function insert(){
        $jugador= new Jugador();
        $jugador->nombre = $_POST['nombre'];
        $jugador->puesto = $_POST['puesto'];
        $jugador->nacimiento = $_POST['nacimiento'];
        $jugador->insert();
        $jugadores=Jugador::all();
        require "app/views/jugador/index.php";
    }

    public function edit($arguments)
    {
        $id = (int) $arguments[0];
        $jugador = Jugador::find($id);
        require "app/views/jugador/create.php";
    }

    public function store()
    {             
        $id = $_POST['id'];
        $jugador = Jugador::find($id);
        $jugador->nombre = $_POST['nombre'];
        $jugador->puesto = $_POST['puesto'];
        $jugador->nacimiento = $_POST['nacimiento'];
        $jugador->save();
        $trab = Jugador::all();
        header('Location: /jugador');
    }

    public function titular($arg)
    {     
        $id = (int) $arg[0];
        $jugador=Jugador::find($id);
        $nombre = $jugador->nombre;
        $puesto = $jugador->puesto;
        $nacimiento = $jugador->nacimiento;
        if (isset($_SESSION['nombre'])) {
            $nombres = unserialize($_SESSION['nombre']);
            $puestos = unserialize($_SESSION['puesto']);
            $nacimientos = unserialize($_SESSION['nacimiento']);
        } else {
            $nombres = [];
            $puestos = [];
            $nacimientos = [];
        }
        $nombres[] = $nombre;
        $_SESSION['nombre']=serialize($nombres);
        $puestos[] = $puesto;
        $_SESSION['puesto']=serialize($puestos);
        $nacimientos[] = $nacimiento;
        $_SESSION['nacimiento']=serialize($nacimientos);
        $jugadores=Jugador::all();
        require "app/views/jugador/index.php";
    }
    public function titulares()
    {
        if (isset($_SESSION['nombre'])) {
            $nombres = unserialize($_SESSION['nombre']);
            $puestos = unserialize($_SESSION['puesto']);
            $nacimientos = unserialize($_SESSION['nacimiento']);
          } else {
            $nombres = [];
            $puestos = [];
            $nacimientos = [];
          }
        require "app/views/jugador/titulares.php";        
    }
    public function quitar($arg)
    {
        if (isset($_SESSION['nombre'])) {
            $nombres = unserialize($_SESSION['nombre']);
            $puestos = unserialize($_SESSION['puesto']);
            $nacimientos = unserialize($_SESSION['nacimiento']);
          } else {
            $nombres = [];
            $puestos = [];
            $nacimientos = [];
          }
          $id = (int) $arg[0];
          unset($nombres[$id]);
          $_SESSION['nombre']=serialize($nombres);
          unset($puestos[$id]);
          $_SESSION['puesto']=serialize($puestos);
          unset($nacimientos[$id]);
          $_SESSION['nacimiento']=serialize($nacimientos);
          require "app/views/jugador/titulares.php";
    }

    public function imagen(){
        $res = move_uploaded_file ($_FILES["fichero"]["foto"], "fotos/".$_FILES["fichero"]["foto"]);
        $trab = Jugador::all();
        header('Location: /jugador');
    }
}
