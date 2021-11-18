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
        $servicios = Servicios::all();
        //pasar a la vista
        require('app/views/user/index.php');
    }
    
    public function show($args)
    {
        // $id = (int) $args[0];
        list($id) = $args;
        $servicios = Servicios::find($id);
        // var_dump($user);
        // exit();
        require('app/views/user/show.php');        
    }
}
