<?php

namespace App\Controllers;

use App\Models\Servicios;
use App\Models\Trabajador;

require_once "app/models/Servicios.php";
require_once "app/models/Trabajador.php";

class EmployerController
{

    function __construct()
    {
        //echo "En UserController";
    }

    public function trabajador()
    {
        $trab = Trabajador::all();
        $servicio = Servicios::all();
        require "app/views/employer/employer.php";
    }

    public function trabajadorPublico(){
        $trab = Trabajador::all();
        $servicio = Servicios::all();
        require "app/views/employer/index.php";
    }

    public function guardarTrabajador(){
        $trabajador= new Trabajador();
        $trabajador->nombre = $_POST['nombre_trab'];
        $trabajador->apellidos = $_POST['apellidos_trab'];
        $tipos=$_POST['type_id'];
        $trabajador->correo = $_POST['correo_trab'];
        $trabajador->telefono = $_POST['telefono_trab'];
        $trabajador->categoria = $_POST['cat_trab'];
        $trabajador->insert();
        $trab = Trabajador::all();
        foreach($trab as $key => $trabs){
            if($trabs->nombre==$trabajador->nombre){
                foreach($tipos as $key => $tipo){
                    $trab_serv = new Trabajador();
                    $trab_serv->employee_id=$trabs->id;
                    $trab_serv->service_id=$tipo ;
                    $trab_serv->save_servicio();
                }
            }
        }
        $servicio = Servicios::all();
        require "app/views/employer/employer.php";      
    }

    public function create()
    {
        $servicioType= Servicios::all();
        require 'app/views/employer/create.php';
    }

    public function show($args)
    {
        list($id) = $args;
        $trab = Trabajador::find($id);
        $trab_serv = Trabajador::find_serv();
        $servicio= Servicios::all();
        require('app/views/employer/show.php');        
    }

    public function edit($arguments)
    {
        $id = (int) $arguments[0];;
        $trab = Trabajador::find($id);
        $servicioType= Servicios::all();
        require 'app/views/employer/edit.php';
    }

    public function update()
    {
        $id = $_POST['id'];
        $trabajador = Trabajador::find($id);
        $trabajador->nombre = $_POST['nombre'];
        $trabajador->apellidos = $_POST['apellidos'];
        $tipos=$_POST['type_id'];
        foreach($tipos as $key => $tipo){
            $trab_serv = new Trabajador();
            $trab_serv->employee_id=$id;
            $trab_serv->service_id=$tipo ;
            $trab_serv->save_servicio();
        }
        $trabajador->correo = $_POST['correo'];
        $trabajador->telefono = $_POST['telefono'];
        $trabajador->categoria = $_POST['categoria'];
        $trabajador->save();
        $trab = Trabajador::all();
        $servicio = Servicios::all();
        require 'app/views/employer/employer.php';
    }

    public function delete($arguments)
    {
        $id = (int) $arguments[0];
        $trabajador = Trabajador::find($id);
        $trabajador->delete();        
        $trab = Trabajador::all();
        $servicio = Servicios::all();
        require 'app/views/employer/employer.php';
    }
}
