<?php

namespace App\Controllers;

require_once "app/models/Servicios.php";
require_once "app/models/Trabajador.php";
use App\Models\Servicios;
use App\Models\Trabajador;

/**
*
*/
class ServiciosController
{

    function __construct()
    {
        // echo "En ServiciosController";
    }

    public function index()
    {
        $servicios = Servicios::all(); 
        require('app/views/servicios/index.php');
    }

    public function servicio()
    {
        $servicios = Servicios::all(); 
        require('app/views/servicios/servicio.php');
    }
    
    public function create()
    {
        require 'app/views/servicios/create.php';
    }

    public function store()
    {
        $servicio = new Servicios();
        $servicio->id = $_REQUEST['id'];
        $servicio->servicio = $_REQUEST['servicio'];
        $servicio->descripcion = $_REQUEST['descripcion'];
        $servicio->tiempo = $_REQUEST['tiempo'];
        $servicio->precio = $_REQUEST['precio'];
        $servicio->insert();
        header('Location:'.PATH.'/servicios');
    }

    public function show($args)
    {
        list($id) = $args;
        $servicio = Servicios::find($id);
        $trab = Trabajador::all();
        $trab_serv = Trabajador::find_serv();
        require('app/views/servicios/show.php');        
    }

    public function edit($arguments)
    {
        $id = (int) $arguments[0];
        $servicio = Servicios::find($id);
        require 'app/views/servicios/edit.php';
    }
    
    public function update()
    {
        $id = $_REQUEST['id'];
        $servicio = Servicios::find($id);
        $servicio->servicio = $_REQUEST['servicio'];
        $servicio->descripcion = $_REQUEST['descripcion'];
        $servicio->tiempo = $_REQUEST['tiempo'];
        $servicio->precio = $_REQUEST['precio'];
        $servicio->save();
        header('Location:'.PATH.'/servicios/servicio');
    }

    public function delete($arguments)
    {
        $id = (int) $arguments[0];
        $servicio = Servicios::find($id);
        $servicio->delete();
        header('Location:'.PATH.'/servicios/servicio');
    }   
}
