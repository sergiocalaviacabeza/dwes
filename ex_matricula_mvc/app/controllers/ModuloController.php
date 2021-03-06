<?php
namespace App\Controllers;

use App\Models\Modulo;
/**
*
*/
class ModuloController
{

    function __construct()
    {
        //echo "En ModuloController";
    }

    public function index()
    {
        $modulos = Modulo::all();
        require "app/views/modulo/index.php";
               
    }

    public function search()
    {
             
    }

    public function create()
    {
        require "app/views/modulo/create.php";
    }

    public function edit($arguments)
    {
        $id = (int) $arguments[0];
        $modulo = Modulo::find($id);
        require "app/views/modulo/create.php";
    }

    public function update()
    {
        
    }

    public function store()
    {      
        $modulo = new Modulo;
        $modulo->codigo = $_POST['codigo'];
        $modulo->nombre = $_POST['nombre'];
        $modulo->horas = $_POST['horas'];
        $modulo->plazas = $_POST['plazas'];
        $modulo->grupo = $_POST['grupo'];
       
        if (empty($_POST['id'])) {
            $modulo->insert();
        } else {
            $modulo->id = $_POST['id'];
            $modulo->save();
        }       
        header('Location: /modulo');
    }

    public function matricular($arg)
    {
        $id = $arg[0];
        $modulo = Modulo::find($id);
        $_SESSION['modulos'][$id] = $modulo;
        header('Location: /modulo');
    }
    public function matriculaModulos()
    {
        $modulos = $_SESSION['modulos'];

        require "app/views/modulo/matricula.php"; 
             
    }
    public function quitar($arg)
    {
        $id = $arg[0];
        unset($_SESSION['modulos'][$id]);

        header('Location: /modulo/matriculaModulos');
    }
}
