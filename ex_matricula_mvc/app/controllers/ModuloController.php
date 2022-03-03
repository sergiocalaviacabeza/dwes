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
        
    }

    public function update()
    {
        
    }

    public function store()
    {             
        
    }

    public function matricular($arg)
    {
        
    }
    public function matriculaModulos()
    {
             
    }
    public function quitar($arg)
    {
        
    }
}
