<?php

namespace App\Controllers;

require_once "app/models/Servicios.php";
use App\Models\Servicios;
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
        //buscar datos
        $servicios = Servicios::all(); // esto es un array por eso lo pongo en plurar
        //pasar a la vista
        // var_dump ($servicios); exit();
        require('app/views/servicios/index.php');
    }
    
    public function create()
    {
        require 'app/views/servicios/create.php';
    }

    public function upload()
    {
        require 'app/views/servicios/upload.php';
    }

    public function uploading()
    {
        echo "Nombre del fichero".$_FILES["fichero1"]["name"];
        echo "<br>Nombre temporal del fichero en el servidor".$_FILES["fichero1"]["tmp_name"];

        // hay que crear el directorio
        $res1 = move_uploaded_file ($_FILES["fichero1"]["tmp_name"], "subidos/".$_FILES["fichero1"]["name"]);


        echo "Nombre del fichero".$_FILES["fichero2"]["name"];
        echo "<br>Nombre temporal del fichero en el servidor".$_FILES["fichero2"]["tmp_name"];

        // hay que crear el directorio
        $res2 = move_uploaded_file ($_FILES["fichero2"]["tmp_name"], "subidos/".$_FILES["fichero2"]["name"]);

        if ($res1 && $res2) {
            echo "<br>Fichero guardado";
        } else {
            echo "<br>Error";
        }
        
    }

    public function store()
    {
        //echo "hola"; exit(); para saber si llega
        $servicio = new Servicios();
        $servicio->id = $_REQUEST['id'];
        $servicio->servicio = $_REQUEST['servicio'];
        $servicio->descripcion = $_REQUEST['descripcion'];
        $servicio->tiempo = $_REQUEST['tiempo'];
        $servicio->precio = $_REQUEST['precio'];
        $servicio->insert(); //función insert en models/servicios.php
        header('Location:'.PATH.'/servicios');
    }

    public function show($args)
    {
        // $id = (int) $args[0];
        list($id) = $args;
        $servicio = Servicios::find($id);
        // var_dump($user);
        // exit();
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
        $servicio->save();//funcion save en models/servicios.php
        header('Location:'.PATH.'/servicios');
    }

    public function delete($arguments)
    {
        $id = (int) $arguments[0];
        $servicio = Servicios::find($id);
        //var_dump($servicio);exit();
        $servicio->delete();//funcion delete en models/servicios.php 
        header('Location:'.PATH.'/servicios');
    }
    
    
}
