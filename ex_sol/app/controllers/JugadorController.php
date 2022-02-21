<?php
namespace App\Controllers;

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
        $jugadores = Jugador::all();
        require "app/views/jugador/index.php";        
    }

    public function create()
    {
        require "app/views/jugador/create.php";
    }

    public function edit($arguments)
    {
        $id = (int) $arguments[0];
        $jugador = Jugador::find($id);
        require "app/views/jugador/create.php";
    }

    public function store()
    {             
        $jugador = new Jugador;
        $jugador->nombre = $_POST['nombre'];
        $jugador->puesto = $_POST['puesto'];
        $jugador->nacimiento = $_POST['nacimiento'];
        if (empty($_POST['id'])) {
            $jugador->insert();
        } else {
            $jugador->id = $_POST['id'];
            $jugador->save();
        }
        move_uploaded_file ($_FILES["foto"]["tmp_name"], 
                                "fotos/".$jugador->id.".jpg");
        header('Location: /jugador');
    }

    public function titular($arg)
    {
        $id = $arg[0];
        $jugador = Jugador::find($id);
        $_SESSION['titulares'][$id] = $jugador;
        header('Location: /jugador');
    }
    public function titulares()
    {
        $titulares = $_SESSION['titulares'];
        // var_dump($titulares);
        // exit();
        require "app/views/jugador/titulares.php";        
    }
    public function quitar($arg)
    {
        $id = $arg[0];
        unset($_SESSION['titulares'][$id]);
        header('Location: /jugador/titulares');
    }
}
